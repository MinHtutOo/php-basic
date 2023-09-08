<?php
session_start();
if(!isset($_SESSION['username'])){
    header("Location:Index.php");
}

include("Links.php");
?>

<h3>Member page</h3>