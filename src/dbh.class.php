<?php
    namespace NotesApp;
    class Dbh {
        protected function connect() {
            try {
                $username = "root";
                $password = "";
                $dbh = new PDO('mysql:host=localhost;dbname=notesdb',
                                $username, $password);
                $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                return $dbh;

            } catch(PDOException $e) {
                print "Error!:" . $e->getMessage() . "<br/>";
                die();
            }
        }
    }