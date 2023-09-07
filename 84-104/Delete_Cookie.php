<?php
function mySetCookie(){
    setcookie('CM','Cooler Myanmar','time()+3600',
    '/','','0');
}
function myGetCookie(){
    if(isset($_COOKIE['CM'])){
        echo $_COOKIE['CM'];
    }else {
        echo "There is no cookie in that name!";
    } 
}
function myDeleteCookie(){
    setcookie('CM','','time()-3600 + 1000',
    '/','','0');
}

//mySetCookie();
myGetCookie();
//myDeleteCookie();

?>