<?php

$ary = array(
   [
    "name"=>"Klaus Michaelson","age"=>"30",
    "subject"=>"History","address"=>"New Orleans",
    "married"=>"yes","child"=>1
    ],
    [ 
    "name"=>"Elijah Michaelson","age"=>"33",
    "subject"=>"History","address"=>"New Orleans",
    "married"=>"no","child"=>0
    ]
);

echo json_encode($ary);

?>