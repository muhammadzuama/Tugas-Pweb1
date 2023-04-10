<?php
function getconnection()
{
    $dbhost = "localhost";
    $dbuser = "root";
    $dbpass = "";
    $db = "todolist";
    $conn = new mysqli($dbhost, $dbuser, $dbpass,$db) or die("Connect failed: %s\n". $conn -> error);
    return $conn;
}

?>
