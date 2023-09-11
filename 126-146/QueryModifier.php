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

function executeQuery($qry){
    $db = dbConnect();
    $result = mysqli_query($db,$qry);

    if(mysqli_num_rows($result)>0){
        foreach($result as $item){
            echo "Id is = " . $item["id"] . "<br>";
            echo "Name is = " . $item["name"] . "<br>";
            echo "Email is = " . $item["email"] . "<br>";
            echo "Password is = " . $item["password"] . "<br>";
            echo "<hr>";
        }
    }
}

//$qry = "SELECT * FROM user WHERE id>3 ";
//$qry = "SELECT * FROM user WHERE id>2 ORDER BY id DESC";
$qry = "SELECT * FROM user LIMIT 2,3";
executeQuery($qry);
?>