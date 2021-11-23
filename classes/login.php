<?php
require_once('database.php');
require_once('user.php');
class Login extends Database{
    public $id,$userID,$loginDate,$IP,$mac;
    

    public function add(){
        $conn = $this->connect();
        $SQL = "INSERT INTO LOGINS (user_id,login_date,login_ip,login_mac) VALUES(?,?,?,?)";
        $stmt = $conn->prepare($SQL);
        if(!$stmt){
            return false;
        }else{
            $stmt->bind_param("ssss",$this->userID,$this->loginDate,$this->IP,$this->mac);
            if($stmt->execute()){
                $SQL = "SELECT * FROM LOGINS ORDER BY login_id DESC LIMIT 1";
                $stmt =$conn->prepare($SQL);
                $stmt->execute();
                $result = $stmt->get_result();
                $row = $result->fetch_array();
                $this->id = $row['login_id'];
                return true;
            }else{
                return false;
            }
        }
    }

    public static function getLogins(){
        $instance = new self();
        $conn = $instance->connect();
        $SQL = "SELECT * FROM LOGINS";
        $stmt = $conn->prepare($SQL);
        $stmt->execute();
        $result = $stmt->get_result();
        $i=1;
        while($row=$result->fetch_array()){
            $user= User::fromID($row['user_id']);
            $name="";$email="";
            if($user != null){
                $name = $user->name;
                $email = $user->email;
            }
            echo'
                <tr>
                    <td>'.$i.'</td>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$row['login_date'].'</td>
                    <td>'.$row['login_ip'].'</td>
                    <td>'.$row['login_mac'].'</td>
                </tr>
            ';
            $i++;
        }
    }
}