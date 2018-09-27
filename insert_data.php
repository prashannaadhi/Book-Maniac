<?php
	session_start();
	$errors = array();
	$name = $email = $Password = $userid =$code= '';
	//To open a connection to MySQL
	$conn = mysqli_connect('localhost', 'root', '', 'user');
	if (!$conn)
	{
		die('Connection Failed');
	}
	echo 'Connected Successfully'.'</br>';

	function test_input($data)
	{
	$data = trim(preg_replace('/\s+/',' ', $data));
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
	}

	if (empty($_POST['Name']))
	{ array_push($errors,'Please enter your name' );}
	if (!preg_match("/^[a-zA-Z ]*$/",$_POST['Name']))
	{ array_push($errors, 'Invalid User name' );}
	else
	{ $name = test_input($_POST['Name']);}

	if (empty($_POST['Email']))
	{ array_push($errors,'Please enter your email');}
	if (!filter_var($_POST['Email'], FILTER_VALIDATE_EMAIL))
	{ array_push($errors,'Invalid Email Address');}
	else
	{ $email = test_input($_POST['Email']);}

	if (empty($_POST['Password']))
	{array_push($errors,'Please enter your password' );}
	else
	{ 
		if ($_POST['Password'] != $_POST['CPassword'])
		{
				array_push($errors,'Please enter your password carefully');
		}
		else
		{ $Password = md5($_POST['Password']);}
	}

	if (empty($_POST['Username']))
	{ array_push($errors,'Please enter your user id');}
	else
	{ $userid = $_POST['Username'];}
//}




if (count($errors) == 0){
		$code= rand(1000000,99999999);
		$sql1 = "INSERT INTO signin_info (Name, Email, Password, Username,A_code)
			  VALUES ('$name', '$email', '$Password', '$userid','$code')";
			
		if (mysqli_query($conn,$sql1))
		{
			echo "Data entered successfully";
		}
		else
		{
			echo "Error inserting data." .mysqli_error($conn);;
		}	



	//$code=substr(md5(mt_rand()),0,15);
	//mysqli_connect('localhost', 'root', '', 'user');

	//$insert=mysql_query("insert into verify values('','$email','$Password','$code')");
	//$db_id=mysql_insert_id();



	//echo "An Activation Code Is Sent To You Check You Emails";


	$sql2 = "SELECT Name, Username, Password FROM signin_info";
		$result = mysqli_query($conn, $sql2);
		
		if(mysqli_num_rows($result) > 0)
		{
			while ($row = mysqli_fetch_assoc($result))
			{
			if ($row['Username'] == $userid && $row['Password'] == $Password)
			{
				$_SESSION['Name'] = $row['Name'];
				$_SESSION['EMAIL']=$row['Email'];

	$message = "Your Activation Code is ".$code."";
    $to=$email;
    $subject="Activation Code For Book-Manic.com ";
    $from = 'photographycenter98@gmail.com';
   $body='Your Activation Code is '.$code.' Please follow the website instruction to activate your account.';
    //echo "error";
    $headers = "From:".$from;
    mail($to,$subject,$body,$headers);
	echo "<br";

				header("location:welcome.php");
				break;
			}	
			}
		}	

	}
	
	else
	{
		echo ('Please enter your information properly');
	}

	mysqli_close($conn);

?>	