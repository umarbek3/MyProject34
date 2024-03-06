<!DOCTYPE html>
<html>
    <head>
        <title>Delete Login Form</title>
        <link rel="stylesheet" type="text/css" href="./registration.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    </head>

    <body>

    <div class="container">
    <h3>Are You Sure to Delete Your Account?</h3>
    <div class="row justify-content-start">
        <div class="col-md-5">

   <form method="post" action="./delete2.php">

  <div class="mb-3">
    <label for="usernameInput" class="form-label">Type Email:</label>
    <input type="text" class="form-control" id="usernameInput" name="email">
  </div>
  <button type="submit" class="btn btn-danger"><a style="text-decoration: none; color: blue;"><p>Yes</p></a></button>
        
    </body>
</html>