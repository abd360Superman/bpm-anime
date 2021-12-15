<?php
    function OpenCon()
    {
        $dbhost = "localhost"; // host of db
        $dbuser = "anime"; // username in PHPMyAdmin
        $dbpass = "Anime123#"; // Password in PHPMyAdmin
        $db = "anime_comments"; // Database Name
        // connection
        $conn = new mysqli($dbhost, $dbuser, $dbpass, $db) or die("Connect failed: %s\n". $conn -> error);

        return $conn;
    }

    function CloseCon($conn) 
    {
        $conn -> close(); // close conncetion
    }
?>