<?php
require_once('classes/ticket.php');
require_once('classes/user.php');
$resultString ='';
if($_SERVER['REQUEST_METHOD']=='POST'){
    session_start();
    $user = User::fromID($_SESSION['user_id']);
    $ticket = new Ticket();
    // public $id,$title,$task,$prio,$description,$adminRemark,$adminRemarkDate,$attachment,$postDate,$status,$email;
    $ticket->title = (isset($_POST['subject'])) ? $_POST['subject'] : "" ;
    $ticket->task = $_POST['task'];
    $ticket->prio = $_POST['priority'];
    $ticket->description = $_POST['description'];
    $ticket->email = $user->email;
    if($ticket->add()){
        $resultString = '1';
    }else{
        $resultString = '0';
    }
}