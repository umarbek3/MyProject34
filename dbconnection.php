<?php 
if(!isset($_POST['submit']))
{
    $email = $_POST['email'];
    $password = $_POST['password'];

    $con = mysqli_connect("localhost:3306", "root", "root", "registration");
    $sql = "select * from old_user where email= '$email' and password= '$password'";
    $result = mysqli_query($con,$sql); // for execution 
    $resultcheck=mysqli_num_rows($result);


    if($resultcheck>0) {
        include"./index.html"; 
    } else {
      echo "<b>Username and Password are incorrect<b>";
    }
}
?> 


