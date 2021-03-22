<?php

include "./header.php";
session_start();
?>

<h1>Register!</h1>
<form action="../includes/register.inc.php" method="post">



<label for="name">Username: </label>
<input type="text" name="username" required>
<br>
<label for="email">Email: </label>
<input type="email" name="email" required >
<br>
<label for="password">Password: </label>
<input type="password" name="password" required>
<br>
<button type="submit" name="submit">Register!</button>

</form>


<?php

if(isset($_GET['error'])){
    if($_GET['error']=="usernametaken"){
        echo "<p>User with this name already exists!</p>";
    }
    else if($_GET['error']=="emailtaken"){
        echo "<p>User with this email already exists!</p>";
    }
    else if($_GET['error']=="userexists"){
        echo "<p>User with this email and username already exists!</p>";
    }
}

include "./footer.php";
?>