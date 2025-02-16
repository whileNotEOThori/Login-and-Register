<?php
//declare variables for connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "Login-and-Register";

// create a new database connection
$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error)
{
    echo "Failed to connect to database".$conn->connect_error;
}
?>