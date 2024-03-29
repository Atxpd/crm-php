<?php
require_once('database.php');

class Admin extends Database{
    public $id,$password,$name;
    public static function login($name,$password){
        $SQL = "SELECT * FROM ADMINS WHERE admin_name=?";
        $instance =  new self();
        $conn =  $instance->connect();
        $stmt = $conn->prepare($SQL);
        if($stmt!=null){
            $stmt->bind_param("s",$name);
            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result!=null){
                    $row = $result->fetch_array();
                    if($row!=null){
                        $pwdHash = $row['admin_password'];
                        if(password_verify($password,$pwdHash)){
                            return $row['admin_id'];
                            // return true;
                        }else{
                            return false;
                        }
                    }else{
                        return false;
                    }
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }else{
            return false;
        }
    }

    public static function fromID($id){
        $instance = new self();
        $conn = $instance->connect();
        $SQL = "SELECT * FROM ADMINS WHERE admin_id=?";
        $stmt = $conn->prepare($SQL);
        if($stmt){
            $stmt->bind_param("s",$id);
            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result){
                    $row = $result->fetch_array();
                    $instance->id  = $row['admin_id'];
                    $instance->name = $row['admin_name'];
                    $instance->password = $row['admin_password'];
                    return $instance;
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }else{  
            return false;
        }

    }

    public function update(){
        $SQL = "UPDATE ADMINS SET admin_name=?,admin_password=? WHERE admin_id=?";
        $conn = $this->connect();
        $stmt = $conn->prepare($SQL);
        if(!$stmt){
            echo mysqli_error($conn);
            return false;
        }else{
            $stmt->bind_param("sss",$this->name,$this->password,$this->id);
            if($stmt->execute()){
                return true;
            }else{
                echo mysqli_error($conn);
                return false;
            }
        }
    }
}