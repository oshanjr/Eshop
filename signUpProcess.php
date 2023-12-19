<?php

include "connection.php";

$fname = $_POST["f"];
$lname = $_POST["l"];
$email = $_POST["e"];
$password = $_POST["p"];
$mobile = $_POST["m"];
$gender = $_POST["g"];

if(empty($fname)){
    echo ("Please Enter Your First Name.");
}else if(strlen($fname) > 50 ){
    echo ("First Name Must Contain Lower Than 50 Characters.");
}else if(empty($lname)){
    echo ("Please Enter Your Last Name.");
}else if(strlen($lname) > 50 ){
    echo ("Last Name Must Contain Lower Than 50 Characters.");
}else if(empty($email)){
    echo ("Please Enter Your Email.");
}else if(strlen($email) > 100 ){
    echo ("Email Address Must Contain Lower Than 100 Characters.");
}else if(!filter_var($email,FILTER_VALIDATE_EMAIL)){
    echo ("Invalid Email Address.");
}else if(empty($password)){
    echo ("Please Enter Your Password.");
}else if(strlen($password) < 5 || strlen($password) > 20 ){
    echo ("Password Must Contain 5 to 20 Characters.");
}else if(empty($mobile)){
    echo ("Please Enter Your Mobile Number.");
}else if(strlen($mobile) != 10){
    echo ("Mobile Number Must Contain !0 Charachters.");
}else if(preg_match("/07[0,1,2,4,5,6,7,8][0-9]/",$mobile)){
    echo("Invalid mobile Number.");
}


?>