<?php
$file = "mine.txt";
$handler = fopen($file,'a');    
fwrite($handler," This is special test by Waiferkolar");
fclose($handler);
?>