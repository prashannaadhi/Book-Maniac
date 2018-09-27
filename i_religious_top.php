<?php
$conn= mysqli_connect("localhost","root","","products");
$query="SELECT * FROM religious ORDER BY Dtimes desc LIMIT 2" ;
$result=mysqli_query($conn, $query);

if($result->num_rows > 0 ){
 
while($row = mysqli_fetch_array($result))
{
echo "<a href='bookdetail.php?ID=$row[ID]&Genre=$row[Genre]'>";
echo "<p align='left'>";echo "<img src='$row[CoverPic]' width=150 height=200>";
echo "<br>";
echo "$row[Name]";
echo "</a>";
}
}
mysqli_close($conn);
?>