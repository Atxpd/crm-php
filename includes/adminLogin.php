<?php
require_once('classes/admin.php');
// require_once('classes/adminLogin.php');
$resultString="";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $result = Admin::login($_POST['name'],$_POST['password']);
    $resultString="";
    if($result!=false){
        session_destroy();
        session_start();
        $_SESSION['admin_id']=$result;
        header('Location: Dashboard.php');
        $resultString = '1';
    }else{
        $resultString = '0';
    }
}