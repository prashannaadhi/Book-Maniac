<?php 
    if(session_id()=="")
    {
        session_start();
    }
    $host="localhost";
    $username="root";
    $password="";
    $dbname="user";
    $conn=mysqli_connect($host, $username, $password, $dbname);
    
		if ($conn->connect_error) {
			die("Connection failed: " . $conn->connect_error);
		} 
			echo "Connected successfully"."<br>";

	mysqli_select_db($conn,'mydb');
?>