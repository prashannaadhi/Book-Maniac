c<?php

        $email="";
        session_start();
        $email= $_SESSION['EMAIL'];
        //echo $email;
	
      $conn=mysqli_connect("localhost", "root", "", "records");
    
    if ($conn->connect_error) { die("Connection failed: " . $conn->connect_error);} 
    ///echo "Connected successfully"."<br>";

    $email= $_SESSION['EMAIL'];
    //echo $email;


	$errors = array();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

if (isset($_POST['INFO'])) {

  if (empty($_POST["full_Name"])) {
    array_push($errors, "Name is required");
  } else {
    $Full_name = test_input($_POST["full_Name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Full_name)) {
      array_push($errors,"Only letters and white space allowed"); 
    }

  } if (empty($_POST["full_Address"])) {
    array_push($errors, "Address is required");
  } else {
    $F_Address = test_input($_POST["full_Address"]);
  }

    if (empty($_POST["phone"])) {
    array_push($errors, "Phone Number is required");
  } else {
    $PhnNo = $_POST["phone"];
  }
  
  if (empty($_POST["Country"])) {
    array_push($errors, "country is required");
  } else {
    $country = test_input($_POST["Country"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$country)) {
      array_push($errors,"Only letters and white space allowed"); 
    }
  }

     if (empty($_POST["Ctype"])) {
    array_push($errors, "Card Type is required");
  } else {
    $Ctype = test_input($_POST["Ctype"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$Ctype)) {
      array_push($errors,"Only letters and white space allowed"); 
    }
  }

     if (empty($_POST["ACCNum"])) {
    array_push($errors, "ACCnum is required");
  } else {
    $ACCnum = test_input($_POST["ACCNum"]);
   
  }

     if (empty($_POST["Pin"])) {
    array_push($errors, "PIN  is required");
  } else {
    $pin = test_input($_POST["Pin"]);
    if (!preg_match("/^[0-9 ]*$/",$pin)) {
      array_push($errors,"Maximum 5 numbers allowed"); 
    }
  }

    $cmt = test_input($_POST["comment"]);


// inserting data
 if (count($errors) == 0) {
  //echo $email; 
	$sql = "INSERT INTO user_record (Full_name, Phone, Email, Address_full, Country, PaymentCard, CardNo, SecurityPin, Remarks)
		VALUES ('$Full_name', '$PhnNo' ,'$email' ,'$F_Address', '$country' ,'$Ctype' , '$ACCnum' ,'$pin' , '$cmt')" ;
 
	if (!mysqli_query($conn,$sql)) { echo ' Not inserted';}
	else { echo 'Inserted' ;
  header("location: show.php?email=$email ");
}
 }
}

?>