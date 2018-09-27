<?php include('validate.php') ?>
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
<h2>Change Password</h2>
  <form ction = "Changepass.php" method="post">
    <div class="form-group">
      <label for="text">Current Password:</label>
      <input type="password" class="form-control" id="old_password" placeholder="" name="old_password">
    </div>
    <div class="form-group">
      <label for="text">New Password:</label>
      <input type="password" class="form-control" id="new_password" placeholder="" name="new_password">
      <input type = "checkbox" onclick = "myFunction()"> Show Password
    </div>
    <div class="form-group">
      <label for="text">Confirm Password:</label>
      <input type="password" class="form-control" id="con_new_password" placeholder="" name="con_new_password">
    </div>
    <button input type="submit" class="btn btn-primary" name = "Changepass" value = "Changepass">Change Password</button>
  </form>
</div>
<script>  
function myFunction()
{
  var x = document.getElementById("new_password");
    if (x.type === "password")
  {
        x.type = "text";
    } 
  else 
  {
        x.type = "password";
    }
}
</script>
</body>
</html>