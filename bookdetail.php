

<!DOCTYPE html>
<html lang="en">

  <head>
        <?php
$conn= mysqli_connect("localhost","root","","products");
$connection= mysqli_connect("localhost","root","","records");

//session_start() ;
    ?>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>BOOK MANIAC</title>

    <!-- Bootstrap core CSS -->
    <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom fonts for this template -->
    <link href="vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href='https://fonts.googleapis.com/css?family=Kaushan+Script' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Droid+Serif:400,700,400italic,700italic' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Roboto+Slab:400,100,300,700' rel='stylesheet' type='text/css'>

    <!-- Custom styles for this template -->
    <link href="css/agency.min1.css" rel="stylesheet">
    <style>
    .book{
    	font-family: Arial;
    	font-size: 24;
    }
</style>
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <?php include("navbar.php"); ?>

    <!-- Header -->
    <?php include("header1.php"); ?>
    <?php 
$bID=$bGenre=$s=""; 
$d=0;
if (isset($_GET['ID'])) 
	{
		$bID = $_GET['ID'];
		$bGenre=$_GET['Genre'];
	}


$query="SELECT * FROM `$bGenre` "; 
$result=mysqli_query($conn, $query);
if(mysqli_num_rows($result) > 0 )
{
	while($row = mysqli_fetch_array($result))
	{
		if ($bID==$row['ID'])
		{
			$_SESSION['bName']= $row['Name'];
			$_SESSION['bAuthor']= $row['Author'];
            $_SESSION['bisbn']= $row['ISBN_number'];
			$_SESSION['bPrice']= $row['Price'];
			$_SESSION['bpic']= $row['CoverPic'];
			$_SESSION['bkey']= $row['SearchKey'];
			$_SESSION['binfo']= $row['Synopsis'];
            $d=$row['Dtimes'];
            $s=$row['Stock'];
            $_SESSION['BGenre']= $bGenre;
		} 
	}
}
?>
<section id="bookdetail">
 <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Book Detail</h2>
          </div>
        </div>
        <br><br>
        <div class="row">
          <div class="col-md-4">
<img class="bookimg" src= <?php echo $_SESSION['bpic'] ?> alt="" width="300px" height="400px">
</div>
<div class="col-md-8">
	<div class="book">

Name: <?php echo $_SESSION['bName']; ?> </br>
Author: <?php echo $_SESSION['bAuthor']; ?></br>
Price: NRs. <?php echo $_SESSION['bPrice']; ?>/-</br>
ISBN Number: <?php echo $_SESSION['bisbn']; ?></br>
Genre: <?php echo $_SESSION['BGenre']; ?></br>

*** <?php echo $_SESSION['bkey']; ?><br><?php echo $_SESSION['binfo']; ?> ***

</div>
<br>
<?php 
$uemail='';
$check=0;  

if(isset($_SESSION['EMAIL'])){$uemail = $_SESSION['EMAIL'];}
//echo $uemail."emailemailemailemail";

$connection= mysqli_connect("localhost","root","","records");

$query1= "SELECT * FROM user_record ";
$result1=mysqli_query($connection,$query1);

//if(!($result1)){ echo "NOT GOOD";}


print mysqli_error($connection);
if(mysqli_num_rows($result1) >= 1)
{
    while($row = mysqli_fetch_array($result1))
    {
        if ($uemail == $row['Email'])
        { 
            //echo "<br> row email :: ".$row['Email'];
            $check = 1;
         } 
        else 
        { 
            //$check = 0;
        }
    }
}
?>
<?php 
//echo $check."<br>";
if($s==0){
?>
<p style="color:red;"><b> Out Of Stock !</b> </p>
<?php
}
else{
if($check == 1){ 
?>

<form name = "form"  method="POST">
<button input type="submit" name="submit1" class="btn btn-primary" value="Buy">
Buy
</button>
<b><?php echo $d ?> people download this before you !!</b> 
</form>
</br>
<?php
         } 
        else{ 
?>

<form name = "form" method = "GET" action="bill_address.php">
<button input type="submit" class="btn btn-primary" data-toggle="modal" data-target="#login" value="Buy">
Buy
</button>
 <b><?php echo $d ?> people download this before you !!</b> 
</form>
</br>

<?php 
        }
    }

if (isset($_POST['submit1'])) 
    {
    echo '<script type="text/javascript">';
    echo 'window.location.href="show.php?email='.$uemail.'" ';
    echo '</script>';
    //header("refresh=0.1, url=show.php?email=$uemail");
    }

?>

</div>
</div>
</div>
</section>

<div class="modal fade" id="buy">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
            <h5>You are not logged In</h5>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>

<?php //session_unset(); ?>

    <!-- Recommendation -->
    <?php include("recommendation_detail.php"); ?>

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