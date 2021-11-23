<?php
require_once('classes/ticket.php');
require_once('classes/user.php');
session_start();


function getTickets(){
    $user = User::fromID($_SESSION['user_id']);
    if(!$user){
    }else{
        Ticket::getTickets($user->email);
    }
}

