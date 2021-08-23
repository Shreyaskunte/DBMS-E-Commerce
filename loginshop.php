<?php
   include("bd.php");
   $servername = "localhost";
   $username = "root";
   $password = "";
   $dbname = "sys";

   $conn = mysqli_connect($servername,$username,$password,$dbname);

 $name = $_POST['name'];
 $email = $_POST['email'];
 $password = $_POST['password'];
 $file = $_FILES['myfiles']['name'];
 $filesTMP = $_FILES['myfiles']['tmp_name'];
 $folder = "images/";       

 move_uploaded_file($filesTMP,$folder.$file);

 $sql = "insert into employee(img, name, email, password) values('$file','$name','$email','$password')";

 if(mysqli_query($conn, $sql))
    {
        echo "<script>alert('Registered Succesfully')</script>";
        header("refresh:1;url=login.html");
    }
    else{
        echo "<script>alert('Registration Unsuccesfull')</script>";
        header("refresh:1;url=login.html");
    }
?>