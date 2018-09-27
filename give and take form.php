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
  <h2>Give and Take form</h2>
  <form ction = "insert_data.php" method="post">
    <div class="form-group">
	<label for="text">Name of the book you want to give:</label>
      <input type="text" class="form-control" id="Name" placeholder="Full Name" name="Name">
    </div>
    <div class="form-group">
      <label for="text">Author of the book:</label>
      <input type="text" class="form-control" id="Author" placeholder="Author" name="Author">
    </div>
    <div class="form-group">
      <label for="pwd">Publication of the book:</label>
      <input type="password" class="form-control" id="Publication" placeholder="Publication name" name="Publication">
    </div>
    <div class="form-group">
      <label for="text">Name and genre of the book you want:</label>
      <input type="password" class="form-control" id="Name" placeholder="Book you want" name="Name">
    </div>
    <button input type="submit" class="btn btn-primary" name = "Submit" value = "Submit">Submit</button>
  </form>
	
</div>
</body>
</html>	