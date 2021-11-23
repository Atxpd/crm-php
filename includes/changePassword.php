<?php
session_start();
// echo $_SESSION['user_id'];
require_once('classes/user.php');
$resultString = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current = $_POST['current'];
    $new = $_POST['new'];
    $confirm = $_POST['confirm'];
    $user = User::fromID($_SESSION['user_id']);
    if (!$user) {
        $resultString = '0';
    } else {
        if (password_verify($current, $user->password)) {
            $user->password = password_hash($new, PASSWORD_BCRYPT);
            if ($user->update()) {
                $resultString = '1';
            } else {
                $resultString = '0';
            }
        } else {
            $resultString = '0';
        }
    }
}