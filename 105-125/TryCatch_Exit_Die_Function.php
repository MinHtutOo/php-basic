<?php

$file = "mine.txt";

try{
    if(file_exists($file))
        echo "We got File";
    else 
        throw new Exception("File not found sir!");
}catch(Exception $e){
    exit($e->getMessage()); // you can also use die()
    //echo $e->getMessage();
}
echo "Hello";

?>