<?php
require_once('database.php');
class User extends Database
{
    public $id, $address="", $email="",$altEmail="", $gender="", $contact="", $name="", $password="";

    public function __construct()
    {
    }

    public function addUser()
    {
        $conn =  $this->connect();
        $SQL = "INSERT INTO USERS (user_address,user_email,user_gender,user_contact,user_name,user_password) VALUES(?,?,?,?,?,?)";
        $stmt = $conn->prepare($SQL);
        if ($stmt==null) {
            // echo mysqli_error($conn);
            return false;
        } else {
            $stmt->bind_param("ssssss", $this->address, $this->email, $this->gender, $this->contact, $this->name, $this->password);
            if ($stmt->execute()) {
                $SQL = "SELECT * FROM USERS ORDER BY user_id DESC";
                $stmt = $conn->prepare($SQL);
                if ($stmt->execute()){
                    $result = $stmt->get_result();
                    if($result!=null){
                        $row = $result->fetch_array();
                        $this->id = $row['user_id'];
                    }
                }
                return true;
            } else {
                // echo mysqli_error($conn);
                return false;
            }
        }
    }

    public static function login($email,$password){
        $SQL = "SELECT * FROM USERS WHERE user_email=?";
        $instance =  new self();
        $conn =  $instance->connect();
        $stmt = $conn->prepare($SQL);
        if($stmt!=null){
            $stmt->bind_param("s",$email);
            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result!=null){
                    $row = $result->fetch_array();
                    if($row!=null){
                        $pwdHash = $row['user_password'];
                        if(password_verify($password,$pwdHash)){
                            return $row['user_id'];
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
        $instance =  new self();
        $SQL = "SELECT * FROM USERS WHERE user_id=?";
        $conn = $instance->connect();
        $stmt = $conn->prepare($SQL);
        if(!$stmt){
            return false;
        }else{
            $stmt->bind_param("s",$id);
            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result == null){
                    return false;
                }else{
                    $row = $result->fetch_array();
                    if($row == null){
                        return false;
                    }else{
                        $instance->id = $row['user_id'];
                        $instance->address = $row['user_address'];
                        $instance->email = $row['user_email'];
                        $instance->altEmail = $row['user_alt_email'];
                        $instance->contact = $row['user_contact'];
                        $instance->name = $row['user_name'];
                        $instance->password = $row['user_password'];
                        return $instance;
                    }
                }
            }else{
                return false;
            }
        }
    }

    public function update(){
        // public $id, $address="", $email="", $gender="", $contact="", $name="", $password="";
        $conn = $this->connect();
        $SQL = "UPDATE USERS SET user_address=?,user_email=?,user_alt_email=?,user_gender=?,user_contact=?,user_name=?,user_password=? WHERE user_id=?";
        $stmt = $conn->prepare($SQL);
        if(!$stmt){
            return false;
        }else{
            $stmt->bind_param("ssssssss",$this->address,$this->email,$this->altEmail,$this->gender,$this->contact,$this->name,$this->password,$this->id);
            if($stmt->execute()){
                return true;
            }else{
                return false;
            }
        }

    }

    public static function getUsers(){
        $instance = new self();
        $conn = $instance->connect();
        $SQL = "SELECT * FROM USERS ";
        $stmt = $conn->prepare($SQL);
        if(!$stmt){
            return false;
        }else{
            if($stmt->execute()){
                $result = $stmt->get_result();
                if($result && $result->num_rows>0){
                    $i=1;
                    while($row=$result->fetch_array()){
                        echo '
                            <tr>
                                <td>'.$i.'</td>
                                <td>'.$row['user_name'].'</td>
                                <td>'.$row['user_email'].'</td>
                                <td>'.$row['user_contact'].'</td>
                                <td>'.$row['user_created_date'].'</td>
                                <td>
                                    <a class="btn btn-danger" href="delete-user.php?id='.$row['user_id'].'"><i class="fas fa-trash-alt"></i></a>
                                </td>
                            </tr>
                        ';
                        $i++;
                    }
                }else{
                    return false;
                }
            }else{
                return false;
            }
        }
    }
    
    public static function deleteFromID($id){
        $instance = new self();
        $SQL = "DELETE FROM USERS WHERE user_id=?";
        $conn = $instance->connect();
        $stmt = $conn->prepare($SQL);
        if($stmt){
            $stmt->bind_param("s",$id);
            if($stmt->execute()){
                return true;
            }else{
                return false;
            }
        }else{
            return false;
        }
    }
    
}
