<?php
    // include 'dbh.class.php';
    namespace NotesApp\classes;
    use NotesApp\classes\Dbh;
    class Notes extends Dbh {

        public function getNotes() 
        {
            $sql = "SELECT * FROM notes ORDER BY notes_createdate DESC";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute();
            return $stmt->fetchAll(\PDO::FETCH_ASSOC);

        }
        
        public function addNotes($title, $desc, $date)
        {
            $sql = "INSERT INTO notes(notes_title, notes_desc, notes_createdate) VALUES(?, ?, ?);";
            $stmt = $this->connect()->prepare($sql);
            $stmt->execute(array($title, $desc, $date));
            $stmt = null;
        }
    }