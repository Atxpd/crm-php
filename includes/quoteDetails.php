<?php
require_once('classes/quote.php');

$quote = Quote::fromID($_GET['id']);

if($_SERVER['REQUEST_METHOD']=='POST'){
    $remark = $_POST['remark'];
    $quote->remark = $remark;
    $quote->status = 'CLOSED';
    $quote->update();
}
