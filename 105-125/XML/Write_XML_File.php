<?php

$arys = array(
    "name"=>"Klaus Michaelson","age"=>"30",
    "subject"=>"History","address"=>"New Orleans",
    "married"=>"yes","child"=>1
);
$str = "";
$str .="<coder>";
foreach($arys as $key=>$value){
    $str .= "<" . $key . ">";
    $str .= $value;
    $str .= "</" . $key . ">";
}
$str .="</coder>";
$handler = fopen("Info.xml",'w');
fprintf($handler,"%s",$str);

?>