<?php

include "./header.php";
?>


<h1>Login!</h1>

<form action="../includes/login.inc.php" method="post">



<label for="name">Username: </label>
<input type="text" name="username" required>
<br>
<label for="email">Email: </label>
<input type="email" name="email" required >
<br>
<label for="password">Password: </label>
<input type="password" name="password" required>
<br>
<button type="submit" name="submit">Log in!</button>

</form>

<?php

if(isset($_GET['error'])){
    
    if($_GET['error']=="invalidusername"){
        echo "<p>User with this name doesn't exist!</p>";
        
    }
    if($_GET['error']=="invalidemail"){
        echo "<p>User with this email doesn't exist!</p>";
        
    }
    
    
}
include "./footer.php";
?>