<?php
$conn= mysqli_connect("localhost","root","","products");
$connection = mysqli_connect("localhost","root","","records");
//
$query=$mail='';
$G = array();
if(!isset($_SESSION['EMAIL'])){
	?>
	<a href='LOG_IN.php'> Click to Login </a> and Get special Recommendation
	<?php
}
else {$mail=$_SESSION['EMAIL'];

	$query1 = "SELECT * FROM bs_record WHERE User_email = '$mail'  LIMIT 3";
	$result1=mysqli_query($connection, $query1);
	echo mysqli_error($connection);
		if(mysqli_num_rows($result1) > 0 ){
			while($row1 = mysqli_fetch_array($result1))
			{
				array_push($G,$row1['Book_genre'] );
			}
		}
			else{
				$G = ["arts","literature","religious"];
			}
//right when u buy, access the bought books genre 
//now only taking arts table
 $query="SELECT * FROM $G[0] UNION
        SELECT * FROM $G[1] UNION
        SELECT * FROM $G[2] ORDER BY RAND() LIMIT 3";

$result=mysqli_query($conn, $query);
echo mysqli_error($conn);

if(mysqli_num_rows($result) > 0 ){
 
while($row = mysqli_fetch_array($result))
{
echo "<table>";
echo "<tr>";
echo "<td>";
echo "<a href='bookdetail.php?ID=$row[ID]&Genre=$row[Genre]'>";
echo "<p align='left'>";echo "<img src='$row[CoverPic]' width=150 height=200>";
echo "</td>";
echo "<td align='left'>";
echo "<p>"."$row[Name]"."</br>"."$row[Author]"."</p>";
echo "</td>";
echo "</tr>";
echo "</a>"."</br>";
echo "</table>";
}
}
}
mysqli_close($conn);
?>