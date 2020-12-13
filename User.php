<?php
require_once 'header.php';
require_once 'Admin/Dbcon.php';
class User{
    public $conn;
    public function __construct(){
        $con=new Dbcon(); 
        $this->conn=$con->connect();
    }

    //signup 
    public function signup($name,$email,$mob,$sq,$sa,$pass)
    {
        $sql="Select * from tbl_user where `email`='$email'";
        $result=$this->conn->query($sql);
        $this->count=$result->num_rows;
        if ($this->count>0) {
            echo '<script>alert("email already exists")</script>';
        } else {
              $sql = "INSERT INTO tbl_user(`email`, `name`,`mobile`,`email_approved`, `phone_approved`,`active`,`is_admin`,`sign_up_date`,`password`,`security_question`,`security_answer`)
               VALUES ('$email','$name','$mob','0','0','0','0', NOW(),'$pass','$sq','$sa')";
            
            if ($this->conn->query($sql) === true) {
                 echo '<script>alert("Registration Successful")</script>';  
                 $_SESSION['verify']=array('email'=>$email,'name'=>$name);
                 header('location:email.php');


            } else {
                 echo "Error: " . $sql . "<br>" . $this->conn->error;
            }
        }
         
    }

    public function update($email, $OTP)
    {
        $sql="UPDATE `tbl_user` SET `active`=1  WHERE `email` ='$email'";
        if ($this->conn->query($sql) === true) {
            echo '<script>alert("Verification Successful You can login")</script>';
            header('location:login.php');
        } else {
                return "Error updating record: " . $this->conn->error;
        }
    }


        public function login($email,$pass)
        {
        $sql="Select * from tbl_user";
        $result = $this->conn->query($sql);
        if ($result->num_rows>0) {
            while ($rows=$result->fetch_assoc()) {
                    $password=$rows['password'];
                    $name=$rows['name'];
                    $id=$rows['id'];
                    $active=$rows['active'];
                    $emailapp=$rows['email_approved'];
                    $phoneapp=$rows['phone_approved'];
                if ($email==$rows['email'] && $password==$pass && $active==1) {
                    echo '<script>alert(Login successful)</script>'; 
                    $_SESSION['User']=array('email'=>$email,'id'=>$id,'name'=>$name);
                    header('location:index.php');
                }

                if ($email==$rows['email'] && $password==$pass && $active==0) {
                    echo '<script>alert("Please verify your email or mobile number")</script>'; 
                }
                 
                if ($email==$rows['email'] && $password==$pass && $rows['is_admin']==1) {
                    echo '<script>alert(Login successful)</script>'; 
                    $_SESSION['Admin']=array('email'=>$email,'id'=>$id,'name'=>$name);
                    header('location:Admin/index.php');
                }
            }
        } else {
                        
                    echo '<script>alert("Email or password not match")</script>';     
        } 
}
                     
               
}

?>