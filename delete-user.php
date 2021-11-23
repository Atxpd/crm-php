<?php
require_once('classes/user.php');
if($_SERVER['REQUEST_METHOD']=='GET'){
    $id = $_GET['id'];

    User::deleteFromID($id);
    header('Location: manage-users.php');

}