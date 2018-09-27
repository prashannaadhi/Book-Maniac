<?php include("login_process.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Login form</h2>
  <p><span class="error" style="color: red;">* required field.</span></p>
  <form method="post">
  <!-- <form action = "login_process.php" method="post"> -->
    <div class="form-group">
      <label for="text">Username:</label><span class="error" style="color: red;">* <?php echo $nameErr;?></span>
      <input type="text" class="form-control" id="username" placeholder="Enter you username" name="Username">
      
    </div>
    <div class="form-group">
      <label for="text">Password:</label><span class="error" style="color: red;">* <?php echo $passErr;?></span>
      <input type="password" class="form-control" id="Password" placeholder="Enter password" name="Password">
      <input type = "checkbox" onclick = "myFunction()"> Show Password
    </div>
    <div class="form-group">
      <a href="forgot.php" style="color: red; cursor: pointer;">Forgot Password?</a>
    </div>
    <button input type="submit" class="btn btn-primary" name = "LogIn" value = "LogIn">Submit</button>
    <a href="index.php">Back To Home</a>
     
  </form>
</div>
<script>  
function myFunction()
{
  var y = document.getElementById("Password");
    if (y.type === "password")
  {
        y.type = "text";
    } 
  else 
  {
        y.type = "password";
    }
}
</script>
</body>
</html>