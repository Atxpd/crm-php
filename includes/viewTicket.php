<?php
require_once('classes/ticket.php');
// $ticket =  new Ticket();
    $id = $_GET['id'];
    $ticket = Ticket::fromID($id);

if ($_SERVER['REQUEST_METHOD']=='POST'){
    $remark = $_POST['remark'];
    $ticket->adminRemark = $remark;
    $ticket->addRemark();
}