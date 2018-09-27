<?php
$conn= mysqli_connect("localhost","root","","products");
$raw_results_arts = mysqli_query($conn," SELECT * FROM arts");
$raw_results_science = mysqli_query($conn," SELECT * FROM science");
$raw_results_literature = mysqli_query($conn," SELECT * FROM literature");
$raw_results_religious = mysqli_query($conn," SELECT * FROM religious");
echo mysqli_error($conn);
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
  <style>
  thead {
    background-color: #b3b3b3;
    color:blue;}
tbody {
     background-color:#f2f2f2;
    color:green;}
table{ 
    width: 85px;
    border: 1px solid black;
   
}
  
  thead {
    display: inline-block;
   height: 50px;
    width: 1200px;
    
}
tbody {

    
    display: inline-block;
    width: 100%;
    height: 350px;
    overflow: auto;
}

</style>

  <body id="page-top" >

    <!-- Navigation -->
    <?php include("navbar.php"); ?>

    <!-- Header -->
    <?php include("header1.php"); ?>
    <br><br>
    <div class="container">
    <div class="row">
        <div class="col-lg-12 text-center">
            <br> <br><br> <br><br><br> <br>
            <h2 class="section-heading text-uppercase">Library</h2>
            <h3 class="section-subheading text-muted">Books available in book maniac</h3>
          </div>
      </div>
  </div>

  <div class="container">
    <div class="dropdown">
  <button class="dropbtn">Genre</button>
  <div class="dropdown-content">
    <a href="#science">Science</a>
    <a href="#arts">Arts</a>
    <a href="#literature">Literature</a>
    <a href="#religious">Religious</a>
  </div>
</div><center>
  <section id="science">
	<table class="table" width="900px">
    <thead>
    <tr>
        <th width="140px">ISBN Number:</th>
        <th width="190">Cover Picture</th>
        <th width="300"> Book Name</th>
        <th width="300">Author</th>
        <th width="220">Publication</th>
        <th width="150">Book Info</th>
    </tr>
    </thead>
</center>
    <tbody align="center">
        <h1 align="center"> SCIENCE </h1>
	<?php 
	if(mysqli_num_rows($raw_results_science) > 0){
     	while($results = mysqli_fetch_array($raw_results_science)){
	?>
	
    	<tr align="center">

    		<td ><?php echo $results["ISBN_number"] ?></td>
		
    		<td><a href=" bookdetail.php?ID=<?php echo $results["ID"]?>&Genre=<?php echo $results["Genre"] ?> ">
				<img src=" <?php echo $results["CoverPic"] ?> " width= "150" height= "200" >
			</td></a>
			
    		<td>"<?php echo $results["Name"] ?>"</td>
    		<td>"<?php echo $results["Author"] ?>"</td>
    		<td><?php echo $results["Publication"] ?></td>
    		<td><?php echo $results["SearchKey"] ?></td>
			
    	</tr>
	<?php
		}
     }
	?>
    </tbody>
	</table>
</section>

<section id="arts">
	<table class="table">
	<thead>
    <tr>
        <th width="140px">ISBN Number:</th>
        <th width="190">Cover Picture</th>
        <th width="300"> Book Name</th>
        <th width="300">Author</th>
        <th width="220">Publication</th>
        <th width="150">Book Info</th>
    </tr>
    </thead>

    <tbody>
        <h2 align="center"> ARTS </h2>
	<?php 
	if(mysqli_num_rows($raw_results_arts) > 0){
     	while($results = mysqli_fetch_array($raw_results_arts)){
	?>
	
    	<tr>

    		<td><?php echo $results["ISBN_number"] ?></td>
			<td><a href=" bookdetail.php?ID=<?php echo $results["ID"]?>&Genre=<?php echo $results["Genre"] ?> ">
				<img src=" <?php echo $results["CoverPic"] ?> " width= "120" height= "170" >
			</td></a>
    		<td>"<?php echo $results["Name"] ?>"</td>
    		<td>"<?php echo $results["Author"] ?>"</td>
    		<td><?php echo $results["Publication"] ?></td>
    		<td><?php echo $results["SearchKey"] ?></td>
			
    	</tr>
	<?php
		}
     }
	?>
    </tbody>
	</table>
</section>

<section id="literature">
	<table class="table">
	<thead>
    <tr>
        <th width="140px">ISBN Number:</th>
        <th width="190">Cover Picture</th>
        <th width="300"> Book Name</th>
        <th width="300">Author</th>
        <th width="220">Publication</th>
        <th width="150">Book Info</th>
    </tr>
    </thead>

        <tbody>
            <h3 align="center"> LITERATURE </h3>
	<?php 
	if(mysqli_num_rows($raw_results_literature) > 0){
     	while($results = mysqli_fetch_array($raw_results_literature)){
	?>
	
    	<tr>

    		<td><?php echo $results["ISBN_number"] ?></td>
			<td><a href=" bookdetail.php?ID=<?php echo $results["ID"]?>&Genre=<?php echo $results["Genre"] ?> ">
				<img src=" <?php echo $results["CoverPic"] ?> " width= "150" height= "200" >
			</td></a>
    		<td>"<?php echo $results["Name"] ?>"</td>
    		<td>"<?php echo $results["Author"] ?>"</td>
    		<td><?php echo $results["Publication"] ?></td>
    		<td><?php echo $results["SearchKey"] ?></td>
			
    	</tr>
	<?php
		}
     }
	?>
    </tbody>
	</table>
</section>

<section id="religious">
	<table class="table">
	<thead>
    <tr>
       <th width="140px">ISBN Number:</th>
        <th width="190">Cover Picture</th>
        <th width="300"> Book Name</th>
        <th width="300">Author</th>
        <th width="220">Publication</th>
        <th width="150">Book Info</th>
    </tr>
    </thead>

        <tbody>
	<h4 align="center"> RELIGIOUS </h4>
    <?php 
	if(mysqli_num_rows($raw_results_religious) > 0){
     	while($results = mysqli_fetch_array($raw_results_religious)){
	?>
	
    	<tr>
			<td><a href=" bookdetail.php?ID=<?php echo $results["ID"]?>&Genre=<?php echo $results["Genre"] ?> ">
				<img src=" <?php echo $results["CoverPic"] ?> " width= "150" height= "200" >
			</td></a>
    		<td>"<?php echo $results["Name"] ?>"</td>
    		<td>"<?php echo $results["Author"] ?>"</td>
    		<td><?php echo $results["Publication"] ?></td>
    		<td><?php echo $results["SearchKey"] ?></td>
			
    	</tr>
	<?php
		}
     }
	?>
    </tbody>
	</table>
</section>	
 </div>


   <!-- Footer -->
    <?php include("footer.php"); ?>

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