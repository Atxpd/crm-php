<?php
if(session_status()==PHP_SESSION_ACTIVE){
}else{
    session_start();
}
// echo $_SESSION['user_id'];
require_once('classes/admin.php');
$resultString = "";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $current = $_POST['current'];
    $new = $_POST['new'];
    $confirm = $_POST['confirm'];
    $admin = Admin::fromID($_SESSION['admin_id']);
    if (!$admin) {
        $resultString = '0';
    } else {
        if (password_verify($current, $admin->password)) {
            $admin->password = password_hash($new, PASSWORD_BCRYPT);
            if ($admin->update()) {
                $resultString = '1';
            } else {
                $resultString = '0';
            }
        } else {
            $resultString = '0';
        }
    }
}