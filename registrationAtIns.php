<?php 
?>

<!DOCTYPE html>
<html>
    <head>
        <title>Login Form</title>
        <link rel="stylesheet" type="text/css" href="./registration.css">
    </head>

    <body>
        <div class="login-page">
            <div class="form">
                <form class="login-form" method="post" action="dbconnection.php" target="_blank"> 
                    <input type="email" name="email" placeholder="Email"/> 
                    <input type="password" name="password" placeholder="password"/>
                    <button type="submit">Login</button>
                    <p class="message">Not Registered? <a href="./insert.php">Create an Account</a></p>
                    <p class="message">Registered? <a href="./delete.php">Delete an Account</a></p>
                    <p class="message">Needs Update? <a href="./update.php">Update Your Account</a></p>
                    <p class="message">View all Records <a href="./view.php">View all the Records</a></p>
                </form>
            </div>
        </div>
    </body>
</html>