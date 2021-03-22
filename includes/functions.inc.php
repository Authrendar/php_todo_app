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

