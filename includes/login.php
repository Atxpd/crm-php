<?php
require_once('classes/user.php');
require_once('classes/login.php');
$resultString="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $result = User::login($_POST['email'],$_POST['password']);
    $resultString="";
    if($result!=false){
        session_start();
        $_SESSION['user_id']=$result;
        $login =  new Login();
        $login->userID = $_SESSION['user_id'];
        $login->loginDate = date('Y-m-d H:i:s');
        $login->IP = $_SERVER['REMOTE_ADDR'];
        $login->mac = exec('getmac');
        $login->add();
        header('Location: Dashboard.php');
        $resultString = '1';
    }else{
        $resultString = '0';
    }
}