<?php
require_once('classes/user.php');
$resultString = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $user =  new User();
    $user->email = $_POST['email'];
    $user->gender = $_POST['gender'];
    $user->contact = $_POST['contact'];
    $user->name = $_POST['name'];
    $user->password = password_hash($_POST['password'], PASSWORD_BCRYPT);

    $resultString = "";
    if ($user->addUser()) {
        header('Location: login.php');
        $resultString = "1";
    } else {
        $resultString = "0";
    }
}
