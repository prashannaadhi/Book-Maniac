<?php
$conn= mysqli_connect("localhost","root","","products");
$raw_results_new = mysqli_query($conn," SELECT * FROM literature LIMIT 6");
?>

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
<br><br><br>
<br><br><br>
<div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Give & Take</h2>
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#giveandtake">
             Give and take form
            </button>
        </div>
    </div>
</div>
<br>
<div class="container">
    <h2>Books came for give and take so far:</h2>
    <table class="table">
    <thead>
    <tr>
        <th>Serial No.</th>
        <th>CoverPic</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Book Owner want</th>
        <th>Book Info</th>
    </tr>
    </thead>
        <tbody>
	<?php 
	if(mysqli_num_rows($raw_results_new) > 0){
     	while($results = mysqli_fetch_array($raw_results_new)){
	?>
	
    	<tr>

    		<td><?php echo $results["ISBN_number"] ?></td>
			<a href='bookdetail.php?ID=<?php echo $results['ID']?>&Genre=<?php echo $results['Genre'] ?>'>
    		<td><img src=" <?php echo $results["CoverPic"] ?> " width= "150" height= "200" ></td>
			</a>
    		<td>"<?php echo $results["Name"] ?>"</td>
    		<td>"<?php echo $results["Author"] ?>"</td>
            <td></td>
    		<td><?php echo $results["SearchKey"] ?></td>
			
    	</tr>
	<?php
		}
     }
	?>
    </tbody>
</table>
</div>
    <div class="modal fade" id="giveandtake">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
        <?php include("give and take form.php"); ?>
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