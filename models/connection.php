<?php

class Connection
{

    public static function connect()
    {

        $dbh = "mysql:host=localhost;dbname=php_pos";
        $user = "root";
        $password = "";

        try {

            $con = new PDO($dbh, $user, $password);

            // $con->exec("set names utf8");

            return $con;

        } catch (PDOException $e) {

            echo "Connection failed: " . $e->getMessage();

        }

    }
}
