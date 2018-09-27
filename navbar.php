<html>
<head>
   
<style>
.dropbtn {
    background-color: #4CAF50;
    color: white;
    padding: 16px;
    font-size: 16px;
    border: none;
}

.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f1f1f1;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}

.dropdown-content a {
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
}

.dropdown-content a:hover {background-color: #ddd}

.dropdown:hover .dropdown-content {
    display: block;
}

.dropdown:hover .dropbtn {
    background-color: #3e8e41;
}
</style>

   
</head>
<body>
<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand js-scroll-trigger" href="index.php">Book maniac</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fa fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#topbooks">Top Books</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#services">Services</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#about">About</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="#team">Team</a>
            </li>
			
			<?php 
			session_start();
			if(isset($_SESSION['Name']))
			{
			?>
			
			<div class="dropdown">
            <button class="dropbtn">
             <?php echo $_SESSION['Name']; ?>
            </button>
            <div class="dropdown-content">
            <?php 
            $connection =mysqli_connect('localhost','root','','user');
              $query="SELECT Name,Status,A_code FROM signin_info";
             $result=mysqli_query($connection,$query);
              while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
                if ($row['Name']==$_SESSION['Name']){
                  if ($row['Status']==1){?>
            <a style="font-size: 12; cursor: pointer;">Registered User</a>
            <?php
            }
            else {?>
              <a href="register.php" style="font-size: 12; cursor: pointer;"> please register </a>
              <?php
              header("url = main.php");
            }
          }
        }
      ?>
            <a href="profile.php">Profile</a>
            <a data-toggle="modal" data-target="#changepass" style="cursor: pointer;">Change Password</a>
            <a href="logout.php">Log Out</a>
            </div>
			<?php
				}
			else{
			?>
              <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#signin">
              Signin
            </button>
            
            <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#login">
              Login
            </button>
			<?php } ?>
          </ul>
        </div>
      </div>
    </nav>
<div class="modal fade" id="login">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
        <?php include("LOG_IN.PHP"); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="signin">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
        <?php include("SIGN_IN.php"); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="changepass">
    <div class="modal-dialog">
      <div class="modal-content">
        <!-- Modal body -->
        <div class="modal-body">
        <?php include("Changepass.php"); ?>
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
</body>
</html>