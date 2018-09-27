 


<link rel="stylesheet" href=../style/css/bootstrap.min.css>
<script src="../style/js/bootstrap.min.js"></script>

<?php
$link = mysqli_connect("localhost", "root", "", "user");
?>



<div class="container">
<div class="header">
  <h2>Admin Login</h2>
  </div>
  <form class="form-horizontal" method="post">
    <div class="form-group">
      <label class="control-label col-sm-2" for="email">Username</label>
      <div class="col-sm-10">
        <input type="text" name="username" class="form-control" id="email" placeholder="Enter Username">
      </div>
    </div>
    <div class="form-group">
      <label class="control-label col-sm-2" for="pwd">Password:</label>
      <div class="col-sm-10">          
        <input type="password" name="password" class="form-control" id="pwd" placeholder="Enter password">
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <div class="checkbox">
          <label><input type="checkbox"> Remember me</label>
        </div>
      </div>
    </div>
    <div class="form-group">        
      <div class="col-sm-offset-2 col-sm-10">
        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
      </div>
    </div>
  </form>



</div>




<style type="text/css">
	#email{
		width:450px;
	}
	#pwd{
		width:450px;
	}
	.container{
		background-color: snow;
		width:490px;
		margin-top: 100px;
		border-radius: 23px;
		height: 305px;
	}
	.header{
		text-align: center;
	}
</style>












<?php
if(isset($_POST['submit']))
{
	$username=($_POST['username']);
	$password=$_POST['password'];
if($username==''||$password=='')
{
	echo "please fill all the forms";

}
else{


	$query="SELECT * FROM admin WHERE username='$username' AND password='$password'";
	$query1=mysqli_query($link,$query);
	if(mysqli_num_rows($query1)>0)
	{
		header("location:dashboard.php?admin=$username");
	}
	else{
		echo "incorrect";
	}	
}
}




?>