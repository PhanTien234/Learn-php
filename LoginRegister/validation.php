<?php
session_start();

$con = mysqli_connect('localhost', 'root', '', 'loginregister');
//check connection
if ($mysqli -> connect_errno) {
    echo "Failed to connect to MySQL: " . $mysqli -> connect_error;
    exit();
  }
  $name= $_POST['user'];
  $pass= $_POST['password'];
  $s = "select * from usertable where name = '$name'  and password='$pass' ";
  $result= mysqli_connect($con, $s);
  $num = mysqli_num_rows($result);
  if($num==1){
     header('location:login.php');
     
  }
  else{
      
      
  }
?>