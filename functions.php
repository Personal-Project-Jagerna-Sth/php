<?php
session_start(); //buildin function

function generatorCSRFToken(){
    if(empty($_SESSION['crf_token'])){
        $_SESSION['crf_token']= bin2hex(random_bytes(32));
    } 
    return$_SESSION['csrf_token'];
}
function verifyCSRFToken($token){
    return hash_equal($_SESSION['csrf_token'],$token);
}
function escapeOutput($data)
{
    return htmlspecialchars($data, ENT_QUOTES, 'UTF-8');
}
function isLoggedIn()
{
    return isset($_SESSION["user"]);
}
?>