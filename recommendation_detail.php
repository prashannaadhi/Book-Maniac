<html>
<head>
<head>
</head>
<body>
<?php
$g=$_SESSION['BGenre'];
$conn= mysqli_connect("localhost","root","","products");
$query="SELECT * FROM $g ORDER BY RAND() LIMIT 4" ;
$result=mysqli_query($conn, $query);

if($result->num_rows > 0 ){

echo "<table>";
echo "<tr>";
echo "<td width='67px'>";
echo "</td>";
while($row = mysqli_fetch_array($result))
{
echo "<td width='300px'>";
echo "<a href='bookdetail.php?ID=$row[ID]&Genre=$row[Genre]'>";
echo "<p align='left'>";echo "<img src='$row[CoverPic]' width=180 height=230>";
echo "</td>";
}
echo "</tr>";
echo "</table>";
}
mysqli_close($conn);
?>