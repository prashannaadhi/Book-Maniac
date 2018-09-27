<?php
	session_start();
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
		header("location:BUY.php");
	}
	else if (isset($_SESSION['Name']) && $ID==0)
	{
		header("location:register.php");
	}
	else
	{
		
		header("refresh:0.1 ; url = LOG_IN.php");
	}	
?>	