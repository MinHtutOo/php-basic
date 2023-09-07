<?php
$file = "mine.txt";
$handler = fopen($file,'w');
fwrite($handler,"I am learning file reading from WiferKolar");
fclose($handler);
?>