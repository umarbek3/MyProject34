<?php 
if(isset($_POST['email']) && isset($_POST['password']) && isset($_POST['newEmail']) && isset($_POST['newPassword'])) {

    $email = $_POST['email'];
    $password = $_POST['password'];
    $newEmail = $_POST['newEmail'];
    $newPassword = $_POST['newPassword'];

    $con = mysqli_connect("localhost", "root", "root", "registration");
    $sql = "UPDATE old_user SET email = '$newEmail', password = '$newPassword' WHERE email = '$email' AND password = '$password'";
    $result = mysqli_query($con, $sql);

    if ($result) {
        echo "Updated Successfully";
    } else {
        echo "Error updating record: " . mysqli_error($con);
    }
}
echo "</br>";
echo "</br>";
?>



<!DOCTYPE html>
<html>
    <head>
        <title>Update Login Form</title>
        <link rel="stylesheet" type="text/css" href="./registration.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>
        <button type="button" class="btn btn-primary"><a style="text-decoration: none; color: white;" href="./registrationAtIns.php"><p>HomePage</p></a></button>
    </body>
</html>
