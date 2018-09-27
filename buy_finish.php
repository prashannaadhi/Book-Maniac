<?php 
$conn= mysqli_connect("localhost","root","","records");
$connection= mysqli_connect("localhost","root","","products"); 

session_start() ;
$Uemail=$D=$bName=$stk=$DT=$G=''; 
$name=$bName=$bprice=$bgenre=$bisbn='';
if (isset($_GET['email'])) 
	{
		$Uemail = $_GET['email'];
	}
	echo $Uemail."<br>";

			$name=$_SESSION['Name'];
			$bName=$_SESSION['bName'];
			$bprice=$_SESSION['bPrice'];
			$bgenre=$_SESSION['BGenre'];
			$bisbn=$_SESSION['bisbn'];

$sql = "INSERT INTO bs_record (Username,BookName,Book_price,Book_genre,ISBN,User_email)
		VALUES ('$name','$bName','$bprice','$bgenre','$bisbn','$Uemail')";

		if (mysqli_query($conn,$sql)){
		
			$G=$_SESSION['BGenre'];
			$query="SELECT * FROM $G ";
 		$result=mysqli_query($connection,$query);
 		echo mysqli_error($connection);
  			while ($row=mysqli_fetch_array($result,MYSQLI_ASSOC)) {
  				if ($row['Name']==$bName){
  					$stk=$row['Stock'];
  					$stk=$stk-1;
  					$D=$row['ID'];
  					$DT=$row['Dtimes'];
  					$DT=$DT+1;
  					
  					echo $stk;
  					echo $DT;
  					
  			$sql = " UPDATE $G SET `Stock`= $stk,`Dtimes`= $DT WHERE `ID`= $D ";

			if (!mysqli_query($connection,$sql)) { echo "Error =>".mysqli_error($connection);;}
			else {echo "Successful"."<br>";}
  			}
				}
		echo "Data entered successfully";

		$message = '';
   		$to=$Uemail;
    	$subject="Purchase Confirmation : ";
    	$from = 'photographycenter98@gmail.com';
   		$body='Transaction Confirm ! 
   		Dear,'.$name.', You purchase of book'.$bName.'has successfully completed. NRS:'.$bprice.' only has been deducted from you account. If you havent done this purchase please contact website officials as soon as possible.';
    	//echo "error";
    	$headers = "From:".$from;
    	mail($to,$subject,$body,$headers);

		header ("location:welcome.php");
		}
		else
		{
			echo "Error inserting data." .mysqli_error($conn);;
		}	
?>