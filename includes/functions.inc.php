<?php


    // Register functions //

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
        echo "";
    }
}


    // Login function //

function checkUserPwd($username, $email,$userPwd, $conn ){
    $sql = "SELECT * from users WHERE username='$username' AND email='$email'";
    $resultData = mysqli_query($conn, $sql);
    if($resultData){

        $user = mysqli_fetch_assoc($resultData);
        $hashPass = $user['userPwd'];
        
        if(password_verify($userPwd, $hashPass)){
            $_SESSION['username'] = $user['username'];
            return true;
        }else{
            return false;
        }
    }
}