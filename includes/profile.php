<?php
require_once("classes/user.php");
session_start();
$user = User::fromID($_SESSION['user_id']);
$resultString = '';
if($_SERVER['REQUEST_METHOD']=='POST'){
    // public $id, $address="", $email="",$altEmail="", $gender="", $contact="", $name="", $password="";
    $user->name = $_POST['name'];
    $user->email = $_POST['email'];
    $user->altEmail = $_POST['altEmail'];
    $user->contact = $_POST['contact'];
    $user->gender = $_POST['gender'];
    $user->address = $_POST['address'];
    if($user->update()){
        $resultString = '1';
    }else{
        $resultString='0';
    }
}
