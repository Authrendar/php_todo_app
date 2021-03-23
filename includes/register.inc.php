<?php

if(isset($_POST['submit'])){

$username = $_POST['username'];
$email = $_POST['email'];
$pass = $_POST['password'];


include "../includes/db.inc.php";
include "../includes/functions.inc.php";


if(checkUsername($username, $conn)){
    header("location: ../views/register.php?error=usernametaken");
}


if(checkEmail($email, $conn)){
    header("location: ../views/register.php?error=emailtaken");
}


if(checkUsername($username, $conn)&&(checkEmail($email, $conn))){
    header("location: ../views/register.php?error=userexists");
}
if(!checkUsername($username, $conn)){
    
    if(!checkEmail($email, $conn)){

    $pwd_hash = password_hash($pass, PASSWORD_BCRYPT);
    createUser($username, $email, $pwd_hash, $conn);
    }
}



}else{
    header("location: ../index.php");
    exit();
}