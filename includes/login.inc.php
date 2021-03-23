<?php


if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];


    include "../includes/db.inc.php";

    include "../includes/functions.inc.php";


    if(!checkUsername($username, $conn)){
        header("location: ../views/login.php?error=invalidusername");
    }

    if(!checkEmail($email, $conn)){
        header("location: ../views/login.php?error=invalidemail");
    }

-
}else{
    header("location: ../index.php");
}