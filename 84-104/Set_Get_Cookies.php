<?php
function mySetCookie(){
    setcookie('CM','Cooler Myanmar','time()+3600',
    '/','','0');
}
function myGetCookie(){
    if(isset($_COOKIE['GM'])){
        echo $_COOKIE['GM'];
    }else {
        echo "There is no cookie in that name!";
    }
    
}

//mySetCookie();
myGetCookie();

?>