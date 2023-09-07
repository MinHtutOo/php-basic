<?php

    // require => when sth is wrong in that file, it doesn't load to another file 

    require("Header.php");
?>

<?php
    // can also used include_once();
    require_once "Body.php"; // can also used include_once();
?>

<?php
    require "Footer.php";
?>