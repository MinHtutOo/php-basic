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
/*
$qry = "CREATE TABLE IF NOT EXISTS user(
    id INT(10) NOT NULL PRIMARY KEY AUTO_INCREMENT ,
    name VARCHAR (225) NOT NULL ,
    creator INT (10) NOT NULL , 
    email VARCHAR (225) NOT NULL , 
    password VARCHAR (225) NOT NULL ,
    UNIQUE KEY email(email)
    );";
*/

/*
$qry = "CREATE TABLE IF NOT EXISTS subjects(
    id INT(10) NOT NULL AUTO_INCREMENT ,
    name VARCHAR(225) NOT NULL ,
    PRIMARY KEY (id)
    );";
*/

/*
$qry = "CREATE TABLE IF NOT EXISTS tutorials(
    id INT(10) NOT NULL AUTO_INCREMENT ,
    subject_id INT(3) NOT NULL ,
    title VARCHAR(225) NOT NULL ,
    created_by INT(3) NOT NULL ,
    PRIMARY KEY(id)
    );";
*/

/*
$qry = "CREATE TABLE IF NOT EXISTS tutorial_view(
    id INT(10) NOT NULL PRIMARY KEY ,
    static_view INT(10) NOT NULL ,
    unique_view INT(10) NOT NULL
    );";
*/

/*
    $users =json_decode(file_get_contents("users.json")) ; 
    foreach($users as $user){
        $pass = passGen($user->password);
        $qry = "INSERT INTO user VALUES (
            $user->id,'$user->name','$user->creator',
            '$user->email','$pass')";

        mysqli_query(dbConnect(),$qry);  
    }
    */

    /*
    $subjects =json_decode(file_get_contents("subjects.json"));
    foreach($subjects as $subject){
        $qry = "INSERT INTO subjects (name) VALUES ('$subject->name')";

        mysqli_query(dbConnect(),$qry);
    }*/

    $tutorials =json_decode(file_get_contents("tutorials.json"));

    $qry = "SELECT * FROM subjects";
    $db = dbConnect();
    $result = mysqli_query($db,$qry);

    $tutorials =json_decode(file_get_contents("tutorials.json"));

foreach($tutorials as $tutorial) {
    $qry = "SELECT name FROM subjects WHERE id = $tutorial->subject_id";
    $result = mysqli_query($db,$qry);

    $name = "";
    foreach($result as $rows){
        $name= $rows["name"];
    }

    $subjectId = $tutorial->subject_id;
    $creators =$tutorial->creator_id;

    $t = 0;
    for($i = $tutorial->start_id; $i <= $tutorial->end_id; $i++){

        $title =  $name . " " . ++$t;
        print_r($title);
        // print_r($title);
        $qry = "INSERT INTO tutorials (subject_id,title,created_by) VALUES 
            ($subjectId,'$title',$creators)";

        mysqli_query($db,$qry);
    }
}

    //$result = mysqli_query(dbConnect(),$qry);
    //echo $result ? "Table Create Successfully." : "Table Create Fail!";

?>
