<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <link rel="stylesheet" type="text/css" href="./registration.css">


    <script src="./registration.js"> 

    </script>


</head>

  <body>
<div class="container">
    <h1>Ro'yhatdan O'tish</h1>
    <div class="row justify-content-start">
        <div class="col-md-5">

   <form method="post" action="./insert2.php" onsubmit="validate1()">

  <div class="mb-3">
    <label for="usernameInput" class="form-label">Email address</label>
    <input type="email" class="form-control" id="usernameInput" name="username">
    <!-- <div id="emailHelp" class="form-text">We'll never share your email with anyone else.</div> --> 
  </div>


  <div class="mb-3">
    <label for="passwordInput" class="form-label">Password</label>
    <input type="password" class="form-control" id="passwordInput" name="password" >
  </div>


  <div class="mb-3">
    <label for="confirmpassinput" class="form-label">Confirm Password</label>
    <input type="password" class="form-control" id="confirmpassinput" name="confirmPassword">
  </div>

  <div class="mb-3">
    <label for="firstname" class="form-label">First Name</label>
    <input type="text" class="form-control" id="firstname" name="firstname">
  </div>


  <div class="mb-3">
    <label for="lastname" class="form-label">Last Name</label>
    <input type="text" class="form-control" id="lastname" name="lastname">
  </div>


  <button type="submit" class="btn btn-primary" name="register">Submit</button>
    </form> 
</div>
</div>
</div>
  </body>
</html>

