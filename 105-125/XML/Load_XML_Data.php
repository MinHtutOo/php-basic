<?php

$data = simplexml_load_file("data.xml");

foreach($data as $key=>$value){
    echo $key;
}

?>