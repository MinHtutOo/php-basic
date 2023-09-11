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

function passGen($pass){
    $pass = md5($pass);
    $pass = sha1($pass);
    $pass = crypt($pass,$pass);
    return $pass;
}

function insertUniqueData($name,$email,$pass){
    $qry = "SELECT * FROM user WHERE name='$name'";
    $db = dbConnect();
    $ret = mysqli_query($db,$qry);
    if(mysqli_num_rows($ret)>0){
        echo "User name is already exist!";
    }else{
        $qry = "INSERT INTO user (name,email,password) 
                VALUES ('$name','$email','$pass')";
        $result = mysqli_query($db,$qry);
        echo $result>0 ? "Insert Successfully." : "Insert Fail!";

    }
}

function multiInsertData($qry){
    $pass = passGen(123);
    $qry = "INSERT INTO user  VALUES (0,'Susan','susan@gmai.com','$pass','');";
    $qry .= "INSERT INTO user  VALUES (0,'Roxy','rox@gmai.com','$pass','');";
    $qry .= "INSERT INTO user  VALUES (0,'Jackson','jackson@gmai.com','$pass','');";

    $db = dbConnect();
    $result = mysqli_multi_query($db,$qry);
    echo $result ? "Insert Successfully." : "Innsert Fail!";
}

function insertData($qry){
    $db = dbConnect();
    $result = mysqli_query($db,$qry);
    echo $result>0 ? "Insert Successful." . mysqli_insert_id($db) : "Insert Fail!";
}
$pass = passGen(123);

$qry = "INSERT INTO user VALUES(0,'John','john@gmail.com','$pass','')";
//insertData($qry);
//insertUniqueData("Akon","akon@gmail.com",$pass);
multiInsertData($qry);

?>