<?php 
//session_start();
$link = mysqli_connect("127.0.0.1", "root", "", "records");
$link1 = mysqli_connect("127.0.0.1", "root", "", "products");
$link2 = mysqli_connect("127.0.0.1", "root", "", "user"); 

?>
<html>

  <head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Profile</title>

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
.kv-avatar .krajee-default.file-preview-frame,.kv-avatar .krajee-default.file-preview-frame:hover {
    margin: 0;
    padding: 0;
    border: none;
    box-shadow: none;
    text-align: center;
}
.kv-avatar {
    display: inline-block;
}
.kv-avatar .file-input {
    display: table-cell;
    width: 213px;
}
.kv-reqd {
    color: red;
    font-family: monospace;
    font-weight: normal;
}
</style>
  </head>
  <body>
        <!-- Navigation -->
    <?php include("navbar.php"); ?>

    <!-- Header -->
    <?php include("header1.php"); ?>

<?php
    $image='';
$id=$_SESSION['EMAIL'];
$query9="SELECT * FROM signin_info WHERE Email='$id'";
$query8=mysqli_query($link2,$query9);
if(!$query8)
{
  echo "error";
}
else{
    if(mysqli_num_rows($query8) > 0){
    while($row=mysqli_fetch_array($query8,MYSQLI_ASSOC)){ 
      $image=$row['Imagepath'];
      //echo $image;
    }
  }
}
?>

       <section class="bg-light" id="profile">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Profile</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-5">
            <div class="team-member">
              <?php if(!empty($image)){ 
                ?>
              <img class="mx-auto rounded-circle" src="<?php echo $image; ?>" alt="">
              <?php
               } else { 
                ?>
              <img class="mx-auto rounded-circle" src="img/dp.png" alt="">
              <?php
               } 
               ?>
              <h4><?php echo $_SESSION['Name']; ?></h4>
              <p class="text-muted"><?php echo $_SESSION['EMAIL']; ?></p>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#address">
              Fill Up your Address Form
            </button>

<form method="post" enctype="multipart/form-data" class="form-group"><br>
Cover photo<br><input type="file" class="btn btn-success"  for="my-file-selector" name="book_image" accept="image/*">
<input type="submit" name="submit" value="submit" class="btn btn-success">
</form>

            </div>
          </div>
          <div class="col-sm-7">
            <div class="team-member">
              <h2>Books you had bought:</h2>
              <table class="table">
                <thead>
                <tr>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>Price</th>
                    <th>Buy Date</th>
                </tr>
                </thead>
               
<?php

$id=$_SESSION['EMAIL'];
$query="SELECT * FROM bs_record WHERE User_email='$id'";
$query1=mysqli_query($link,$query);
if(!$query1)
{
  echo "error";
}
else{
    if(mysqli_num_rows($query1) > 0){
    while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC)){ 
  ?>                  
                    <tr>
                    <td><?php echo $row['BookName']; ?></td>
                    <td></td>
                    <td><?php echo $row['Book_genre']; ?></td>
                    <td><?php echo $row['Book_price']; ?>/-</td>
                    <td><?php echo $row['time']; ?></td>
                    </tr>
<?php 

} } }

?>


            </table>
            <br><br><br>
              <h2>Books you have contributed:</h2>
              <table class="table">
                <thead>
                <tr>
                    <th>Book Name</th>
                    <th>Author</th>
                    <th>Genre</th>
                    <th>Contributed Date</th>
                </tr>
                </thead>
                

<?php

$id=$_SESSION['EMAIL'];
$query="SELECT * FROM contribution WHERE User='$id'";
$query1=mysqli_query($link1,$query);
if(!$query1)
{
  echo "error";
}
else{
    if(mysqli_num_rows($query1) > 0){
    while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC)){ 
  ?>                  
                    <br>
                    <tr>
                    <td><?php echo $row['Name']; ?></td>
        
                    <td><?php echo $row['Author']; ?></td>
                    <td><?php echo $row['Genre']; ?></td>
                    <td><?php echo $row['time']; ?></td>
                    </tr>
<?php 

} } }

?>



            </table>
            </div>
          </div>
      </div>
  </div>
<div class="modal fade" id="address">
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
}
    
    if ($ID==1)
    {
      include("BUY.php");
    }
    else
    {
      echo "Only Registered User are allowed !<br>";
      echo "<a href='register.php'> Click to Register </a>";
    }
    ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</section>
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
    <script>
        $('#fileUpload').on('change',function(){
  $('.avatar').removeClass('open');
});
$('.avatar').on('click',function(){
  $(this).addClass('open');
});
// added code to close the modal if you click outside
$('html').click(function() {
 $('.avatar').removeClass('open');
});

$('.avatar').click(function(event){
    event.stopPropagation();
});
</script>

  </body>
</html>

<?php

if(isset($_POST['submit']))
{ 

  $file_name=$_FILES['book_image']['name'];
  $file_type=$_FILES['book_image']['type'];
  $file_size=$_FILES['book_image']['size'];
  $file_tmp_name=$_FILES['book_image']['tmp_name'];
  $destination = "profile_pic/".$file_name;

if($file_name)
  {
    move_uploaded_file($file_tmp_name, $destination); 
 }
$e=$_SESSION['EMAIL'];
  $query= "UPDATE `signin_info` SET Imagepath='$destination' WHERE Email= '$e' ";
 if(mysqli_query($link2,$query))
{ 
  header('Location: '.$_SERVER['REQUEST_URI']);
  }
else
{
  echo mysqli_error($link);
}
}
?>