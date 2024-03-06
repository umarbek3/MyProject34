
<!DOCTYPE html>
<html>
<head>
    <title>Update Login Form</title>
    <link rel="stylesheet" type="text/css" href="./registration.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
</head>
<body>
    <div class="container">
        <h3>Update Your Email and Password</h3>
        <div class="row justify-content-start">
            <div class="col-md-5">
                <form method="post" action="./update2.php">
                    <div class="mb-3">
                        <label for="emailInput" class="form-label">Old Email Address</label>
                        <input type="email" class="form-control" id="emailInput" name="email">
                    </div>
                    <div class="mb-3">
                        <label for="passwordInput" class="form-label">Old Password</label>
                        <input type="password" class="form-control" id="passwordInput" name="password">
                    </div>
                    <div class="mb-3">
                        <label for="newEmailInput" class="form-label">New Email</label>
                        <input type="email" class="form-control" id="newEmailInput" name="newEmail">
                    </div>
                    <div class="mb-3">
                        <label for="newPasswordInput" class="form-label">New Password</label>
                        <input type="password" class="form-control" id="newPasswordInput" name="newPassword">
                        <br>
                        <button type="submit" class="btn btn-primary"><p><a href="./update2.php" style="color: white; text-decoration: none" >Change!</a></p></button>
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>

