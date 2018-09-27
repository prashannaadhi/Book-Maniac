  <!DOCTYPE html>
<html lang="en">
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
  <link href="css/agency.min1.css" rel="stylesheet">
</head>
<body>

    <?php include("navbar.php"); 
    ?>

    <?php include("header1.php"); ?> 
    <br><br><br>
    <br><br><br>
<div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Delivery Information</h2>
            <h3 class="section-subheading text-muted">According to Your Previous Entered Information.</h3>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-4">
  <form>
      <?php 
$UEmail=$bID=''; 
//if(isset($_POST['submit']))
if (isset($_GET['email'])) 
  {
    $UEmail = $_GET['email'];
    //echo $UEmail;
  }

$conn= mysqli_connect("localhost","root","","records");

$query="SELECT * FROM user_record "; 

$result=mysqli_query($conn, $query);

if(!($result)){exit();}

echo mysqli_error($conn);

if(mysqli_num_rows($result) > 0 )
{
  while($row = mysqli_fetch_array($result))
  {
    if ($UEmail==$row['Email'])
    {
      $_SESSION['Name']= $row['Full_name'];
      $_SESSION['Add']= $row['Address_full']." / ".$row['Country'];
      $_SESSION['phone']= $row['Phone'];
      $_SESSION['cardT']= $row['PaymentCard'];
      $_SESSION['cardN']= $row['CardNo'];
      $_SESSION['cmt']= $row['Remarks'];

    } 
  }
}
?>
    <div class="form-group">
      <label for="text">Name: <?php echo $_SESSION['Name']; ?></label>
    </div>
    <div class="form-group">
      <label for="text">Address: <?php echo $_SESSION['Add']; ?></label>
    </div>
    <div class="form-group">
      <label for="text">Phone: <?php echo $_SESSION['phone']; ?></label>
    </div>
    <div class="form-group">
      <label for="text">Card Type: <?php echo $_SESSION['cardT']; ?></label>
    </div>
    <div class="form-group">
      <label for="text">Card Number:  <?php echo $_SESSION['cardN']; ?></label>
    </div>
    <div class="form-group">
      <label for="text">Remarks:  <?php echo $_SESSION['cmt']; ?></label>
    </div>
	</div>
	<div class="col-sm-4">
    <div class="form-group">
      <img class="bookimg" src= <?php echo $_SESSION['bpic'] ?> alt="" width="200px" height="275px">
    </div>
	</div>
	<div class="col-sm-4">
    <div class="form-group">
      <label for="text">Name: <?php echo $_SESSION['bName']; ?></label>
    </div>
    <div class="form-group">
      <label for="text">ISBN No: <?php echo $_SESSION['bisbn']; ?></label>
    </div>
    <div class="form-group">
      <label for="text">Price: NRs. <?php echo $_SESSION['bPrice']; ?></label>
    </div>
    <div class="form-group">
      <label for="text"><a href="edit_address.php" style="color:red;">Want to Change Your Billing Address ?</a></label>
    </div>
</form>

  <a href ="buy_finish.php?email=<?php echo $UEmail ; ?>"> <button input type="submit" class="btn btn-primary" >Confirm Information</button></a>

</div>
</div>
<!-- Footer -->
    <?php include("footer.php"); ?>

    <!-- Bootstrap core JavaScript -->
    <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <!-- Plugin JavaScript -->
    <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

    <!-- Contact form JavaScript -->
    <script src="js/jqBootstrapValidation.js"></script>
    <script src="js/contact_me.js"></script>

    <!-- Custom scripts for this template -->
    <script src="js/agency.min.js"></script>

  </body>

</html>
