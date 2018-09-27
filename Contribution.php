<?php include('product_adding.php') ?>
<?php include('errors.php') ?>
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
<br>
<br>
<br>
<div class="container">
  <h2>Contribution Form</h2>
  <form action = "Contribution.php" method="post">
    <div class="form-group">
      <label for="text">Book Name:</label>
      <input type="text" class="form-control" id="Book_name" placeholder="Full Book Name" name="Book_name">
    </div>
    <div class="form-group">
      <label for="text">Book Genre:</label>
      <select name="Genre">
 			<option value="science">Science</option>
  			<option value="literature">Literature</option>
  			<option value="religious">Religion</option>
  			<option value="arts">Arts</option>
			</select>
    </div>
    <div class="form-group">
      <label for="text">Author:</label>
      <input type="text" class="form-control" id="Author" placeholder="" name="Author">
    </div>
    <div class="form-group">
      <label for="text">Edition:</label>
      <input type="text" class="form-control" id="Edition" placeholder="" name="Edition">
    </div>
    <div class="form-group">
      <label for="text">Publication:</label>
      <input type="text" class="form-control" id="Publication" placeholder="" name="Publication">
    </div>
    <div class="form-group">
      <label for="text">ISBN_Number:</label>
      <input type="text" class="form-control" id="ISBN_number" placeholder="" name="ISBN_number">
    </div>
    <div class="form-group">
      <label for="text">Cover Picture of Book:</label>
      <input type="file" class="form-control" id="fileToUpload" placeholder="" name="fileToUpload">
    </div>
    <button input type="submit" class="btn btn-primary" name = "addP" value = "addP">Insert Book</button>
</form>
</div>
</body>
</html>
