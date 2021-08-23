<?php
    include('bd.php');
    $uname=$_POST['email'];
    $password=$_POST['password'];

    
    $sql="SELECT * FROM employee WHERE email='$uname' and password='$password'";
    
    if(mysqli_query($conn,$sql))
    {
      echo "<script>alert('Login Successfull');</script>";
      header("refresh:1;url=productlist.php");
    }
    else
    {
      echo "<script>alert('Login Unsuccessfull');</script>";
      header("refresh:1;url=login.html");
    }
  ?>