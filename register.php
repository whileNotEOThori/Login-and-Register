<?php
include 'connect.php';

if (isset($_POST['signUp']))
{
    $firstName = $_POST['firstName'];
    $lastName = $_POST['lastName'];
    $email= $_POST['email'];
    $password= $_POST['password'];
    $password = md5($password); //encrypt password

     $checkEmail = "SELECT * FROM users WHERE email = '$email'";
     $result = $conn->query($checkEmail);

     if($result->num_rows > 0)
    {
        echo "Email address already exists!"
    }
    else
    {
        $inserQuery = "INSERT INTO users(firstName,lasName,email,password) VALUES ('$firstName','$lastName','$email','$password')";

        if ($conn->query($insertQuery) == TRUE)
        {
            header("locarion: index:php");
        }
        else
        {
            echo "Error: ".c$conn->error;
        }
    }
}

if (isset($_POST['signIn']))
{
    $email= $_POST['email'];
    $password= $_POST['password'];
    $password = md5($password); //encrypt password

     $sql = "SELECT * FROM users WHERE email = '$email' AND password = '$password'";
     $result = $conn->query($sql);

     if($result->num_rows > 0)
    {
        session_start();
        $row = $result->fetch_assoc();
        $_SESSION['email'] = $row['email'];
        header("Location: homepage.php");
        exit();
    }
    else
    {
       echo "Not found, Incorrect email or password";
    }
}
?>