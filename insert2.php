<?php

$username = $_POST['username'];
$password = $_POST['password'];
$confirm_password = $_POST['confirmPassword'];
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];


$con = mysqli_connect("localhost", "root", "root", "registration");
$sql = "INSERT INTO new_user (username, password, confirmPassword, firstname, lastname) VALUES ('$username', '$password', '$confirm_password', '$firstname', '$lastname')";
$result = mysqli_query($con,$sql); // for execution 
//print_r($result);

?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="./registration.css">
    </head>

    <body>
        <a style="text-decoration: none; color: blue;" href="./registrationAtIns.php" ><p>Registered Successfully</p></a>
    </body>
</html>
