<?php

session_start();

if(isset($_POST['submit'])){

    $username = $_POST['username'];
    $email = $_POST['email'];
    $pass = $_POST['password'];


    include "../includes/db.inc.php";

    include "../includes/functions.inc.php";


    if(!checkUsername($username, $conn)){
        header("location: ../views/login.php?error=invalidusername");
        exit();
    }

    if(!checkEmail($email, $conn)){
        header("location: ../views/login.php?error=invalidemail");
        exit();
    }

    if(checkUserPwd($username, $email, $pass, $conn)){
        header("location: ../index.php");
        exit();
    }else{
        header("location: ../views/login.php?error=invalidpass");
        exit();
    }


}else{
    header("location: ../index.php");
    exit();
}