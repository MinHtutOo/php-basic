<?php

echo $_SERVER['PHP_SELF'] . "<br>";
echo $_SERVER['SERVER_ADDR'] . "<br>";
echo $_SERVER['SERVER_NAME'] . "<br>";
echo $_SERVER['REQUEST_METHOD'] . "<br>";
echo $_SERVER['SERVER_PROTOCOL'] . "<br>";
echo $_SERVER['REQUEST_TIME'] . "<br>";
echo $_SERVER['QUERY_STRING'] . "<br>";
echo $_SERVER['DOCUMENT_ROOT'] . "<br>";
echo $_SERVER['HTTP_HOST'] . "<br>";
echo $_SERVER['HTTP_USER_AGENT'] . "<br>";
echo $_SERVER['SCRIPT_FILENAME'] . "<br>";
echo $_SERVER['SERVER_PORT'] . "<br>";
echo $_SERVER['SCRIPT_NAME'] . "<br>";
echo $_SERVER['REQUEST_URI'] . "<br>";
echo $_SERVER['REMOTE_ADDR'] . "<br>";

echo $_SERVER['HTTP_ACCEPT'] . "<br>";
echo $_SERVER['HTTP_ACCEPT_ENCODING'] . "<br>";
echo $_SERVER['HTTP_CONNECTION'] . "<br>";
echo $_SERVER['REMOTE_PORT'] . "<br>";
echo $_SERVER['SERVER_PORT'] . "<br>";
echo $_SERVER['SERVER_ADMIN'] . "<br>";
echo $_SERVER['SERVER_SIGNATURE'] . "<br>";

#Important

$_SERVER['PHP_SELF']; // getting currennt PHP file name
$_SERVER['SERVER_ADDR']; // getting current host address
$_SERVER['SERVER_NAME']; // getting current domain name
$_SERVER['REQUEST_METHOD']; // getting request method
$_SERVER['SERVER_PROTOCOL']; // getting server protocol
$_SERVER['REQUEST_TIME']; // getting request time
$_SERVER['QUERY_STRING']; // getting query string
$_SERVER['DOCUMENT_ROOT']; // getting document root
$_SERVER['HTTP_HOST']; // getting HTTP host
$_SERVER['HTTP_USER_AGENT']; // getting user agent
$_SERVER['SCRIPT_FILENAME']; // absolute path of current file
$_SERVER['SERVER_PORT']; // getting port number
$_SERVER['SCRIPT_NAME']; // script file name
$_SERVER['REQUEST_URI']; // request uri
$_SERVER['REMOTE_ADDR']; // remote address

# Not frequently used

$_SERVER['GATEWAY_INTERFACE']; // getting gateway interface
$_SERVER['SERVER_SOFTWARE']; // getting serrver software
$_SERVER['HTTP_ACCEPT']; // server Http accept file  type
$_SERVER['HTTP_ACCEPT_ENCODING']; // server Http gzip
$_SERVER['HTTP_ACCEPT_LANGUAGE']; // server language
$_SERVER['HTTP_CONNECTION']; // connection
$_SERVER['REMOTE_PORT']; // remote port
$_SERVER['SERVER_ADMIN']; // server admin
$_SERVER['SERVER_SIGNATURE']; // server signature
?>