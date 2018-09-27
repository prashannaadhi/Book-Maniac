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
<br><br><br><br><br>
	<div class="container">
  <form action = "register.php" method="post">
    <div class="form-group">
      <label for="text">Enter Your Activation Code:</label>
      <input type="text" class="form-control" id="code" placeholder="Activation code" name="code">
    </div>
    <button input type="submit" class="btn btn-primary" name = "submit" value = "submit">Submit</button>
    <a href="welcome.php">Back To Home</a>
</form>
</div>

<?php 
  $Acode="";
  session_start();
  
if (isset($_POST['submit'])) {
	if (empty($_POST['code']))
		{ echo 'Please enter your activation code '.$_SESSION['Name'];
		  echo "</br>";
		}
	else
		{ $Acode = $_POST['code'];}

	$connection =mysqli_connect('localhost','root','','user');
	$query="SELECT Name,id,A_code FROM signin_info";
 	$result=mysqli_query($connection,$query);
  while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {

  	if ($row['Name']==$_SESSION['Name']){
  		if ($row['A_code']==$Acode){

  			$sql = "UPDATE `signin_info` SET `Status` = '1';";
			if (!mysqli_query($connection,$sql)) { echo "Registeration Error";}
			else {echo "registered Successful"."<br>";}
			header("refresh:0.1 ; url = welcome.php");
  		}
  		else {
			echo "Use Correct Code From Email !";
  		}
  	}

  }
}

if (isset($_POST['cancel'])){ header("url = welcome.php"); }

?>

</body>
</html>
