<?php

define("DB_HOST","localhost");
define("DB_NAME","phptest");
define("DB_USER","root");
define("DB_PASS","");

function dbConnect(){
    $db = mysqli_connect(DB_HOST,DB_USER,DB_PASS,DB_NAME);
    if(mysqli_connect_errno($db) > 0)
        die("Connection Fail!");
    else
        return $db;
}

function errDebugger($data){
    echo "<pre>" .print_r($data,true) ."</pre>";
}

function createTable($qry){
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    echo $result ? "Table Create Successfully." : "Table Create Fail!";
}

$qry = "CREATE TABLE subject(
    id INT(10) UNSIGNED PRIMARY KEY AUTO_INCREMENT,
    name VARCHAR(225) UNIQUE NOT NULL,
    created_at date,
    updated_at date
    );";
 
createTable($qry);

?>