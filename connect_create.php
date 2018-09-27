<?php
	$servername = "localhost";
	$username = "root";
	$password = "";
	
	$sql1 = "CREATE DATABASE user"; //Database 'user' created;
	$sql2 = "CREATE DATABASE website"; //Database 'website' created;
	
	//To open a connection to MySQL
	$conn = mysqli_connect($servername, $username, $password);
	if (!$conn)
	{
		die('Connection Failed');
	}
	echo 'Connected Successfully'.'</br>';
	
	if (mysqli_query($conn,$sql1))
	{
		echo "Database created successfully";
	}
	else
	{
			echo "Error creating database." .mysqli_error($conn);
	}
	
	if (mysqli_query($conn,$sql2))
	{
		echo "Database created successfully";
	}
	else
	{
			echo "Error creating database." .mysqli_error($conn);
	}
	
	$conn1 = mysqli_connect($servername, $username, $password, 'user');
	$conn2 = mysqli_connect($servername, $username, $password, 'website');
	
	$table1 = "CREATE TABLE signin_info(
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			Name VARCHAR(60) NOT NULL,
			Email VARCHAR(50),
			Password VARCHAR(32),
			Username VARCHAR(20) 
			)";
			
	$table2 = "CREATE TABLE give_take(
			id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
			Name_of_your_book  VARCHAR(60),
			Author VARCHAR(60),
			Publication VARCHAR(60),
			Book_you_want VARCHAR(60) 
			)";
	
	if (mysqli_query($conn1,$table1))
	{
		echo "Table created successfully";
	}
	else
	{
			echo "Error creating table." .mysqli_error($conn);;
	}	
	
	if (mysqli_query($conn2,$table2))
	{
		echo "Table created successfully";
	}
	else
	{
			echo "Error creating table." .mysqli_error($conn);;
	}
	mysqli_close($conn);	
?>	
