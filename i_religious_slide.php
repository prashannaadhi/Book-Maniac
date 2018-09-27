<?php
$conn= mysqli_connect("localhost","root","","products");
$query="SELECT * FROM religious ORDER BY RAND() LIMIT 5" ;
$result=mysqli_query($conn, $query);

if($result->num_rows > 0 ){
 ?>
	<table> <tr>
	<?php
while($row = mysqli_fetch_array($result))
{
echo "<marquee>";
echo "&nbsp &nbsp &nbsp &nbsp<td width=200px>";
echo "<a href='bookdetail.php?ID=$row[ID]&Genre=$row[Genre]'>";
echo "<p align='left'>";echo "<img src='$row[CoverPic]' width=180 height=230>";
echo "<br>";
echo "</a> &nbsp &nbsp &nbsp &nbsp";
echo "</td>";
echo "</marquee>";
}
}
?>
</tr></table>
<?php
mysqli_close($conn);
?>