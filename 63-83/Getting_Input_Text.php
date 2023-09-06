<?php
    if(isset($_POST['submit'])){
        $name = $_POST['username'];
        $pass = $_POST['password'];
        echo "Username is " . $name . "<br>" . "Password is " . $pass;
    }
?>

<form action="<?php $_PHP_SELF ?>" method="post">
    <input type"text" name="username" placeholder="Username"><br>
    <input type"password" name="password"><br>
    <button type="submit" name="submit">Register</button>
</form>