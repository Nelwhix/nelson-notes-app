<?php
    if (isset($_POST['submit'])) {
        require_once '../classes/notes.class.php';

        $title = $_POST['title'];
        $desc = $_POST['description'];
        $date = date('Y-m-d h:i:sa');
        
        $newNote = new Notes();
        $newNote->addNotes($title, $desc, $date);
    }
   

