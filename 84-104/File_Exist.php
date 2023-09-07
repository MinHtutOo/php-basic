<?php
function readMyFile($filename){
    if(file_exists($filename)){
        $h = fopen($filename, 'r');
        $size =filesize($filename);
        $data = fread($h,$size);
        fclose($h);
        return $data;
    }else {
        echo "File not found!";
    }
    
}
echo readMyFile("exist.txt");
?>