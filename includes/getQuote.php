<?php
require_once('classes/user.php');
require_once('classes/quote.php');
session_start();
$user = User::fromID($_SESSION['user_id']);
$quote = new Quote();
$resultString  = "";
if($_SERVER['REQUEST_METHOD']=='POST'){
    $quote->name = $_POST['name'];
    $quote->email = $_POST['email'];
    $quote->contact = $_POST['contact'];
    $quote->company = $_POST['company'];
    $quote->webDesign = (isset($_POST['webDesign'])) ? 1 : 0;
    $quote->cms = (isset($_POST['cms'])) ? 1 : 0;
    $quote->seo = (isset($_POST['seo'])) ? 1 : 0;
    $quote->smo = (isset($_POST['smo'])) ? 1 : 0;
    $quote->staticWeb = (isset($_POST['staticWeb'])) ? 1 : 0;
    $quote->dynamicWeb = (isset($_POST['dynamicWeb'])) ? 1 : 0;
    $quote->flashWeb = (isset($_POST['flashWeb'])) ? 1 : 0;
    $quote->domainReg = (isset($_POST['domainReg'])) ? 1 : 0;
    $quote->webHosting = (isset($_POST['webHosting'])) ? 1 : 0;
    $quote->webMaintenance = (isset($_POST['webMaintenance'])) ? 1 : 0;
    $quote->ecomm = (isset($_POST['ecomm'])) ? 1 : 0;
    $quote->animation = (isset($_POST['animation'])) ? 1 : 0;
    $quote->payment = (isset($_POST['payment'])) ? 1 : 0;
    $quote->logo = (isset($_POST['logo'])) ? 1 : 0;
    $quote->dashboard = (isset($_POST['dashboard'])) ? 1 : 0;
    $quote->openSource = (isset($_POST['openSource'])) ? 1 : 0;
    $quote->newsLetter = (isset($_POST['newsLetter'])) ? 1 : 0;
    $quote->other = (isset($_POST['other'])) ? 1 : 0;
    $quote->query = $_POST['query'];
    $quote->postDate = date('YYYY-m-d h:i:s');
    if($quote->add()){
        $resultString = "1";
    }else{
        $resultString="0";
    }
}

function service($id,$title){
    echo '
        <div class="form-check">
            <input type="checkbox" class="form-check-input" name="'.$id.'" id="'.$id.'"></input>
            <label for="'.$id.'" class="form-check-label">'.$title.'</label>
        </div>
    ';
}