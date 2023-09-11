<?php

define("DB_HOST","localhost");
define("DB_NAME","best");
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

function passGen($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass,$pass);
    return $pass;
}

    $tutorials =json_decode(file_get_contents("tutorials.json"));

    $qry = "SELECT * FROM tutorials";
    $db = dbConnect();
    $result = mysqli_query($db,$qry);

    foreach($result as $item){
        $id = $item["id"];
        $static_view = mt_rand(1000,1000000);
        $unique_view = mt_rand(100,10000);
        $qry = "INSERT INTO tutorial_view VALUES ($id,$static_view,$unique_view)";
        mysqli_query($db,$qry);
    }



?>