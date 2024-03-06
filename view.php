<?php

$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirmPassword'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];


$con = mysqli_connect("localhost", "root", "root", "registration");
$sql = "SELECT * FROM old_user";
$result = mysqli_query($con,$sql); // for execution 
//print_r($result);

?>
