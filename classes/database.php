<?php
class Database {
    private $server = 'localhost';
    private $user = 'root';
    private $password='';
    private $database='CRM2';

    public function connect(){
        $conn = mysqli_connect($this->server,$this->user,$this->password,$this->database);
        return $conn;
    }
}