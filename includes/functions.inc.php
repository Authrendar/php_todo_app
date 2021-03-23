<?php

function checkUsername($username, $conn){
    $sql = "SELECT * from users WHERE username='$username'";

    $resultData = mysqli_query($conn, $sql);

    if(mysqli_fetch_assoc($resultData))
        return true;
    else
        return false;
}

function checkEmail($email, $conn){
    $sql = "SELECT * from users WHERE email='$email'";

    $resultData = mysqli_query($conn, $sql);

    if(mysqli_fetch_assoc($resultData))
        return true;
    else
        return false;
}


function createUser($username, $email, $pwd_hash, $conn){
    $sql = "INSERT INTO `users`( `username`, `email`, `userPwd`) VALUES ('$username', '$email', '$pwd_hash')";
    if(mysqli_query($conn,  $sql)){
        header("location: ../views/login.php");
        exit();
    }else{
        echo "NIOE DZIALA";
    }
}

function checkUserPwd(){
    
}
