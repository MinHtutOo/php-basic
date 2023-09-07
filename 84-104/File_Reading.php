<?php
$file = "test.txt"; //file path
$handler = fopen($file,'r'); //file open(file and mode)
$size = filesize($file); //getting file size
$data = fread($handler,$size); //reading #return binary data,limit character
echo $data;
?>