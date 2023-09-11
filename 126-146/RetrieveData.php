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

function retrieveSingleData($id){
    $qry = "SELECT * FROM user WHERE id=$id";
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    if(mysqli_num_rows($result)>0){
        foreach($result as $data){
            echo "Id is = " . $data["id"] . "<br>";
            echo "Name is = " . $data["name"] . "<br>";
            echo "Email is = " . $data["email"] . "<br>";
            echo "Password is = " . $data["password"] . "<br>";
            echo "<hr>";
        }
    }
}

$qry = "SELECT * FROM user";
executeQuery($qry);

retrieveSingleData(2);

//errDebugger(dbConnect());

?>