<?php
if(isset($_POST['email'])) {
    
$email = $_POST['email'];

$con = mysqli_connect("localhost", "root", "root", "registration");
$sql = "DELETE FROM old_user WHERE email = '$email'";
$result = mysqli_query($con,$sql); // for execution

}
echo "Deleted Successfully. You can create an another Account";
echo "</br>";
echo "</br>";
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Delete Login Form</title>
        <link rel="stylesheet" type="text/css" href="./registration.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>

        <button type="button" class="btn btn-primary"><a style="text-decoration: none; color: white;" href="./registrationAtIns.php"><p>HomePage</p></a></button>
        
    </body>
</html>

