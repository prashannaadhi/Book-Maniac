<?php
$nameErr = $passErr = "";
  
	//session_start();
if(isset($_POST["LogIn"])){

	 if (empty($_POST["name"])) {
    	$nameErr = "Name is required";
	}

	if (isset($_POST['Username']))
	{
		$userid = $_POST['Username'];
	}
	if (isset($_POST['Password']))
	{
		$password = md5($_POST['Password']);
	}
	
	$conn = mysqli_connect('localhost', 'root', '', 'user');
	
	$sql2 = "SELECT * FROM signin_info";
	$result = mysqli_query($conn, $sql2);
	
	if(mysqli_num_rows($result) > 0)
	{
		while ($row = mysqli_fetch_assoc($result))
		{
		if ($row['Username'] == $userid && $row['Password'] == $password)
		{
			$_SESSION['Name'] = $row['Name'];
			$_SESSION['EMAIL'] = $row['Email'];
			header("location:welcome.php");
			break;
		}	
		else
		{
			$passErr= "Please fill the information properly!!";
			//header("refresh:0.2 ; url = LOG_IN.php");
		}
		}
	}
}
?>	
	