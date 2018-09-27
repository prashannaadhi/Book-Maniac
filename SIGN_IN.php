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
  <h2>SignIn form</h2>
  <form action = "insert_data.php" method="post">
    <div class="form-group">
      <label for="text">Name:</label>
      <input type="text" class="form-control" id="Name" placeholder="Full Name" name="Name">
    </div>
    <div class="form-group">
      <label for="text">Email Address:</label>
      <input type="text" class="form-control" id="Email" placeholder="Valid email address" name="Email">
    </div>
    <div class="form-group">
      <label for="pwd">Password:</label>
      <input type="password" class="form-control" id="pwd" placeholder="Enter password" name="Password">
      <input type = "checkbox" onclick = "myFunction()"> Show Password
    </div>
    <div class="form-group">
      <label for="text">Confirm Password:</label>
      <input type="password" class="form-control" id="cpwd" placeholder="Re-Enter your password" name="CPassword">
    </div>
    <div class="form-group">
      <label for="text">Username:</label>
      <input type="text" class="form-control" id="" placeholder="Name for the site" name="Username">
    </div>
    <button input type="submit" class="btn btn-primary" name = "SignIn" value = "Sign In">Submit</button>
  </form>
     <h6>***<a href = "LOG_IN.php">LogIn if you already have an account </a></h6> 
</div>

<script>  
function myFunction()
{
  var y = document.getElementById("pwd");
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