<?php
//declare variables for connection
$host = "localhost";
$user = "root";
$pass = "";
$db = "login-and-register";

// create a new database connection
$conn = new mysqli($host,$user,$pass,$db);

if($conn->connect_error)//check if ->connection_status wont work
{
    echo "Failed to connect to database".$conn->connect_error;
}
?>