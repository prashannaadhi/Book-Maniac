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
    <link href="css/agency.min.css" rel="stylesheet">

  </head>

  <body id="page-top">

    <!-- Navigation -->
    <?php include('adminheader.php');?>
    <br>
    <br>
    <br>
    <br>
  <section id="science">
  <table class="table">
    <thead>
    <tr>
        <th>ISBN Number:</th>
        <th>Cover Picture</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Publication</th>
        <th>Book Info</th>
    </tr>
    </thead>

    <tbody>
  <?php 
  if(mysqli_num_rows($raw_results_science) > 0){
      while($results = mysqli_fetch_array($raw_results_science)){
  ?>
  
      <tr>

        <td><?php echo $results["ISBN_number"] ?></td>
    
        <td><a href=" bookdetail.php?ID=<?php echo $results["ID"]?>&Genre=<?php $results["Genre"] ?> ">
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
        <th>ISBN NUmber.</th>
        <th>Cover Picture</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Publication</th>
        <th>Book Info</th>
    </tr>
    </thead>

    <tbody>
  <?php 
  if(mysqli_num_rows($raw_results_arts) > 0){
      while($results = mysqli_fetch_array($raw_results_arts)){
  ?>
  
      <tr>

        <td><?php echo $results["ISBN_number"] ?></td>
      <td><a href=" bookdetail.php?ID=<?php echo $results["ID"]?>&Genre=<?php $results["Genre"] ?> ">
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

<section id="literature">
  <table class="table">
  <thead>
    <tr>
        <th>ISBN NUmber.</th>
        <th>Cover Picture</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Publication</th>
        <th>Book Info</th>
    </tr>
    </thead>

        <tbody>
  <?php 
  if(mysqli_num_rows($raw_results_literature) > 0){
      while($results = mysqli_fetch_array($raw_results_literature)){
  ?>
  
      <tr>

        <td><?php echo $results["ISBN_number"] ?></td>
      <td><a href=" bookdetail.php?ID=<?php echo $results["ID"]?>&Genre=<?php $results["Genre"] ?> ">
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
        <th>ISBN NUmber.</th>
        <th>Cover Picture</th>
        <th>Book Name</th>
        <th>Author</th>
        <th>Publication</th>
        <th>Book Info</th>
    </tr>
    </thead>

        <tbody>
  <?php 
  if(mysqli_num_rows($raw_results_religious) > 0){
      while($results = mysqli_fetch_array($raw_results_religious)){
  ?>
  
      <tr>

        <td><?php echo $results["ISBN_number"] ?></td>
      <td><a href=" bookdetail.php?ID=<?php echo $results["ID"]?>&Genre=<?php $results["Genre"] ?> ">
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