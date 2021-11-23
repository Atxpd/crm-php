<?php
require_once('classes/ticket.php');
function getTickets(){
    Ticket::getAllTickets();
}