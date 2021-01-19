<?php   
session_start();

//Session
$_SESSION['name'] = "Sarah";
$_SESSION['age'] = "20";
$_SESSION['birthdate'] = "October 19,2000";
print_r($_SESSION);
unset($_SESSION['age']);
session_destroy();

//Cookies

$cookie_name = "Sarah";
$cookie_value = "19";
setcookie($cookie_name,$cookie_value,time()+10);
if(!isset($_COOKIE[$cookie_name])){
    echo "Cookie is already expired!";
}else{
    echo"<br> Name: ". $cookie_name; 
}



?>

    
