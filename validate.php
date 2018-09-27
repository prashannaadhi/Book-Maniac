<?php 
//session_start();
$p_username=$_SESSION['EMAIL'];
echo $p_username;
//$p_old_password=$_POST['old_password'];
//$p_new_password=$_POST['new_password'];
//$p_con_new_password=$_POST['con_new_password'];

	if ($_SERVER['REQUEST_METHOD']=='POST')
	{
		$p_old_password=$_POST['old_password'];
		$p_new_password=$_POST['new_password'];
		$p_con_new_password=$_POST['con_new_password'];

			//if ($p_username==$_SESSION['Name'])
			//{	
					//two new  passwords are equal to each other 
					if ($p_new_password==$p_con_new_password)
					{
						$conn=mysqli_connect('localhost','root','','user');
						$query6="SELECT * FROM signin_info";
						$result6=mysqli_query($conn,$query6);

						while ($row=mysqli_fetch_array($result6,MYSQLI_ASSOC)) 
						{
			 				if($p_old_password!=$p_new_password)
			 				{
			 					while ($p_username==$row['Email'])
			 				    {
			 						$r_id=$row['id'];
			 						$p_new_password=md5($p_new_password);

				 				   $conne=mysqli_connect('localhost','root','','user');
				 				   $query7="UPDATE signin_info SET Password='$p_new_password' WHERE id='$r_id'";
				 				   if (mysqli_query($conne,$query7))
				 				   {
				 				   		echo"Updated";
										header ("location:logout.php");

				 				   	}
				 				   	else 
				 				   		echo "Not Updated";

			 						break;
			 					}	

			 				}
			 				else 
			 					{echo "OLD AND NEW PASSWORD IS SAME ";
			 				break;}
			 				
						}

					}
					else echo "NEW PASSWORDS DO NOT MATCH";
			//}
			//else
				//echo " YOU ARE NOT THE AUTHORISED USER ";
		}
 ?>