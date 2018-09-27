
<link rel="stylesheet" href=../style/css/bootstrap.min.css>
<script src="../style/js/bootstrap.min.js"></script>
<?php
$link = mysqli_connect("localhost", "root", "", "records");
?>

<?php
include('adminheader.php');

?>
<div class="estimated_transaction">


<?php
$query="SELECT * FROM bs_record WHERE Ostatus='2'";
$query1=mysqli_query($link,$query);
$totalestimated=0;
while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
{
	
	$totalestimated+=$row['Book_price'];

}


//echo $totalestimated;

?>


</div>


<div class="current_transaction">
<?php
$query="SELECT * FROM bs_record WHERE Ostatus='1'";
$query1=mysqli_query($link,$query);
$totalcurrent=0;
while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
{
	
	$totalcurrent+=$row['Book_price'];

}


//echo $totalcurrent;

?>


</div>

<div class="ordered_transaction">



<?php
$query="SELECT * FROM bs_record WHERE Ostatus='0'";
$query1=mysqli_query($link,$query);
$totalordered=0;
while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
{
	
	$totalordered+=$row['Book_price'];

}


//echo $totalordered;

?>



</div>

<style type="text/css">
	.estimated_transaction{
		
	}
	.current_transaction{
		
	}
	.ordered_transaction{
		
	}
	.dashtable{
		padding-top: 80px;
	}
</style>

<div class="dashtable">
<table class="table table-hover">
<tr>
        <td>Delivered transaction</td><td><?php echo "Rs.  ".$totalcurrent." "; ?></td>
    </tr>
    <tr >
    <td>Sent for deliveries </td><td><?php echo "Rs. ".$totalestimated." "; ?> </td>
    </tr>
    <tr >
    <td>ordered transaction </td><td><?php echo "Rs. ".$totalordered.""; ?> </td>
    </tr>
    </table>
    </div>