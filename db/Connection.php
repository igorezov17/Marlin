<?php
    class Connection
    {

        public static function make()
        {
            $pdo = new PDO("mysql:host=localhost;dbname=test", "root", "");
            return $pdo;
        }

    }

?>