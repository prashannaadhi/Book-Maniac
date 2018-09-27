<?php include('confirm.php') ?>
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
  <h2>Delivery Information</h2>
  <form action = "BUY.php" method="post">
    <div class="form-group">
      <label for="text">Full Name:</label>
      <input type="text" class="form-control" id="full_Name" placeholder="<?php echo $_SESSION['Name']; ?>" name="full_Name">
    </div>
    <div class="form-group">
      <label for="text">Phone Number:</label>
      <input type="text" class="form-control" id="phone" placeholder="" name="phone">
    </div>
    <div class="form-group">
      <label for="text">Country:</label>
      <input type="text" class="form-control" id="Country" placeholder="" name="Country">
    </div>
    <div class="form-group">
      <label for="text">Full Address:</label>
      <input type="text" class="form-control" id="full_Address" placeholder="Tole,City,State" name="full_Address">
    </div>
    <div class="form-group">
      <label for="text">Card Type:</label>
      <select name="Ctype">
        <option value="VISA">Visa</option>
        <option value="MASTERCARD">MASTER CARD</option>
        <option value="PAYPAL">PAYPAL</option>
        <option value="NATIONAL">NATIONAL</option>
      </select>
    </div>
    <div class="form-group">
      <label for="text">Account Number:</label>
      <input type="text" class="form-control" id="ACCNum" placeholder="Valid Account Number" name="ACCNum">
    </div>
    <div class="form-group">
      <label for="text">Account Pin:</label>
      <input type="password" class="form-control" id="Pin" placeholder="" name="Pin">
    </div>
    <div class="form-group">
      <label for="text">Remarks:</label>
      <input type="text" class="form-control" id="comment" placeholder="things we need to know more" name="comment">
    </div>
    <button input type="submit" class="btn btn-primary" name = "INFO" value = "INFO">Confirm Data</button>
  </form>
</div>
</body>
</html>