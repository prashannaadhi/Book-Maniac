<!DOCTYPE html>
<html lang="en">

  <head>

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
 
  </head>

  <body id="page-top">

    <!-- Navigation -->
    <?php include("navbar.php"); ?>

    <!-- Header -->
    <?php include("header1.php"); ?>
<br><br><br><br>
<br>
<br><br>

<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Contribution</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#contribute">
             Contribution Form
            </button>
        </div>
    </div>
</div>

<div class="modal fade" id="contribute">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
<?php
if(!empty($_SESSION)){
        $ID=0;
            $connection =mysqli_connect('localhost','root','','user');
              $query="SELECT * FROM signin_info";
             $result=mysqli_query($connection,$query);
              while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                if ($row['Name']==$_SESSION['Name']){
                  if ($row['Status']==1){$ID=1;} 
                  } 
                }
    
    if (isset($_SESSION['Name']) && $ID==1)
    {
        include("Contribution.php");
    }
    if (isset($_SESSION['Name']) && $ID==0)
    {
        echo "Only Registered User are allowed to Contribute !<br>";
        echo "<a href='register.php'> Click to Register </a>";
    }
}
    else
    {
        echo "Login To Contribute !!<br>";
        echo "<h5><a href='LOG_IN.php'> Click to Login </a></h5>";
    }   
?>  


        <?php //include("Contribution.php"); ?>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
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