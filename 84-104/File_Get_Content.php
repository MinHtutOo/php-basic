<?php
function readMyFile($filename){
    if(file_exists($filename)){
        $data = file_get_contents($filename); // return string data,unlimit
        return $data;
    }else{
        echo "file not Found!";
    }
}
echo readMyFile("test.txt");
?>