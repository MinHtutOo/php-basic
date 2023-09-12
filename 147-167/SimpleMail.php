<?php

$ary = ["klaus@localhost, elijah@localhost","tester@localhost"];
$to= implode(',',$ary);
$subject = "PHP Mail Test";

$message = '<html><body>';
$message .= '<div style="width: 80%;margin: 0 auto;border: 1px solid #ddd;padding: 20px; overflow: auto;">';
$message .= '<h1 style="text-align: center;font-family: Cambria;color: brown;">PHP Mail Test By Waifer</h1>';
$message .= '<p style="text-indent: 45px;font-family: Cambria;font-size: 15px;color: burlywood;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam omnis provident ullam ipsa fugit quos.
        Dicta, natus aliquam ipsum corrupti, vero, similique eos doloremque veritatis consequatur quam recusandae 
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam omnis provident ullam ipsa fugit quos.
        Dicta, natus aliquam ipsum corrupti, vero, similique eos doloremque veritatis consequatur quam recusandae 
        ab sapiente!
        </p>';
$message .= '<p style="text-indent: 45px;font-family: Cambria;font-size: 15px;color: burlywood;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam omnis provident ullam ipsa fugit quos.
        Dicta, natus aliquam ipsum corrupti, vero, similique eos doloremque veritatis consequatur quam recusandae 
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam omnis provident ullam ipsa fugit quos.
        Dicta, natus aliquam ipsum corrupti, vero, similique eos doloremque veritatis consequatur quam recusandae 
        ab sapiente!
        </p>';
$message .= '<p style="text-indent: 45px;font-family: Cambria;font-size: 15px;color: burlywood;">Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam omnis provident ullam ipsa fugit quos.
        Dicta, natus aliquam ipsum corrupti, vero, similique eos doloremque veritatis consequatur quam recusandae 
        Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam omnis provident ullam ipsa fugit quos.
        Dicta, natus aliquam ipsum corrupti, vero, similique eos doloremque veritatis consequatur quam recusandae 
        ab sapiente!
        </p>';
$message .= '<p style="text-indent: 45px;font-family: Cambria;font-size: 15px;color: burlywood; float: right; clear: both;">
        Your Sincerly!
        </p>';
$message .= '<p style="text-indent: 45px;font-family: Cambria;font-size: 15px;color: burlywood; float: right; clear: both;">
        Waiferkolar
        </p>';

$message .= '</body></html>';

$header = "From: MMPHPTuto@gmail.com\r\n";
$header .= "Content-Type:text/html";

mail($to,$subject,$message,$header);

?>