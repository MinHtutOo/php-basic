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

$qry = "SELECT
            ur.name AS User_Name,
            ur.id AS User_id,
            COUNT(tuto.id) AS Total_Tutorial,
            (
                CASE WHEN 
                   COUNT(tuto.id) <= 30
                THEN
                    'Armature'
                ELSE 
                    'Genius'
                END
            )AS Teacher_type
        FROM
            user AS ur
        LEFT JOIN
            tutorials AS tuto
        ON
            ur.id=tuto.created_by
        WHERE 
            ur.creator=1
        GROUP BY
            tuto.created_by
";
$result = mysqli_query(dbConnect(),$qry);
foreach($result as $value){
    errDebugger($value);
}

        

?>