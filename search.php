<?php

//$conn=mysqli_connect("localhost","root","") or die ("Error connecting");
//mysqli_select_db($conn,'products') or die (mysqli_error());

$conn= mysqli_connect("localhost","root","","products");
?>

<html>
<head>
    <title>Search results</title>
</head>
<body>

<?php
if (isset($_GET['query'])) {
$query = $_GET['query'];
$min_length = 3;

if (strlen($query) >= $min_length){
    $query = htmlspecialchars($query);
	$query = strtoupper($query);
    //echo $query;
	$query = mysqli_real_escape_string($conn,$query);
	$raw_results = mysqli_query(
        $conn," SELECT * FROM arts WHERE (`Name` LIKE '%".$query."%') OR (`SearchKey` LIKE '%".$query."%')OR (`Author` LIKE '%".$query."%')UNION
            SELECT * FROM science WHERE (`Name` LIKE '%".$query."%') OR (`SearchKey` LIKE '%".$query."%')OR (`Author` LIKE '%".$query."%')UNION
            SELECT * FROM literature WHERE (`Name` LIKE '%".$query."%') OR (`SearchKey` LIKE '%".$query."%')OR (`Author` LIKE '%".$query."%')UNION
            SELECT * FROM religious WHERE (`Name` LIKE '%".$query."%') OR (`SearchKey` LIKE '%".$query."%')OR (`Author` LIKE '%".$query."%') ");

    if(!$raw_results)
        echo (mysqli_error($conn));

	// * means that it selects all fields, you can also write: `id`, `title`, `text`
    // signin_info is the name of our table and can be extend to many tables using ',' to seperate several tables
    // '%$query%' is what we're looking for, % means anything, for example if $query is cat
    //it will search for rcat ggcat catt also
     if (mysqli_num_rows($raw_results) > 0)
    {
     	while($results = mysqli_fetch_array($raw_results)){
            echo "<table>";
            echo "<tr>";
            echo "<td>";
            echo "<a href='bookdetail.php?ID=$results[ID]&Genre=$results[Genre]'>";
            echo "<img src='$results[CoverPic]' width=150 height=200>";
            echo "</td>";
            echo "<td align='left'>";
     		echo "<p>"."Name: ".$results["Name"]."</br>"."Author: ".$results["Author"]."</br>"."Price: NRs.".$results["Price"]."</br>"."*** ".$results["SearchKey"]."***"."</p>";
            echo "</td>";
            echo "</tr>";
            echo "</a>"."</br>";
            echo "</table>";

     	}
     }
     else
     	echo "No Results";
 }
 else
 	echo "Minimum length is ".$min_length;
}
?>
</body>
</html>