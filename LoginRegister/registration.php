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
  $s = "select * from usertable where name = '$name' ";
  $result= mysqli_connect($con, $s);
  $num = mysqli_num_rows($result);
  if($num>0){
      echo "Username already taken";
  }
  else{
      $reg  = "insert into usertable(name, password) values('$name', '$pass')";
      mysqli_query($con, $reg);
      echo "Registration successful"
      
  }
?>