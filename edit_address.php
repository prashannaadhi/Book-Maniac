<?php

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

if (isset($_POST['INFO1'])) {

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
  $sql = " UPDATE user_record SET Full_name= '$Full_name' , Phone= '$PhnNo' , Address_full = '$F_Address' , Country = '$country', PaymentCard = '$Ctype' , CardNo = '$ACCnum' , SecurityPin = '$pin' , Remarks = '$cmt' WHERE Email = '$email' ";
 
  if (!mysqli_query($conn,$sql)) { echo ' Not inserted';}
  else { echo 'Inserted' ;
  header("location: show.php?email=$email ");
}
 }
}

?>


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
  <form action = "edit_address.php" method="post">
    <div class="form-group">
      <label for="text">Full Name:</label>
      <input type="text" class="form-control" id="full_Name" placeholder="" name="full_Name">
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
    <button input type="submit" class="btn btn-primary" name = "INFO1" value = "INFO1">Confirm Data</button>
    <a href="show.php?email=<?php echo $_SESSION['EMAIL']; ?>">Back</a>
  </form>
</div>
</body>
</html>