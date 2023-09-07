<?php
include("Links.php");

session_start();

if(isset($_POST['submit'])){
    $user = $_POST['name'];
    $pass = $_POST['password'];
    
    if($user == "Aki" && $pass == "123"){
        $_SESSION['username'] = $user;
        $_SESSION['password'] = $pass;

        header("Location: Member.php");
    }else{
        echo "You are not a menber!";
    }
}
?>

<h3>Index Page</h3><br>
<form action="<?php $_PHP_SELF ?>" method="POST">
    <input type="text" name="name" placeholder="username"><br>
    <input type="password" name="password"><br>
    <input type="submit" name="submit" value="Login"><br>
</form>
