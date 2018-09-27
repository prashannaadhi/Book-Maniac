<?php
include('adminheader.php');

?>
<link rel="stylesheet" href=../style/css/bootstrap.min.css>
<script src="../style/js/bootstrap.min.js"></script>
<link rel="stylesheet" href=../style/style.css>
<div class="ordering">
<?php
$link = mysqli_connect("127.0.0.1", "root", "", "records");
$link1 = mysqli_connect("127.0.0.1", "root", "", "products");
?>

<div class="ordertable">

<div class="tablec">
<table    >
<thead>
<th width="200px" >NAME </th>
<th width="200px" >Email</th>
<th width="200px" >Phone</th>
<th width="200px" >Order date</th>
<th width="200px" >product name</th>
<th width="200px" >product price</th>

</thead>

</table>
</div>
<style type="text/css">
	.tablec{
		margin-left: 50px;
	}
</style>
<?php
$query="SELECT * FROM bs_record WHERE Ostatus='0' ";
$query1=mysqli_query($link,$query);
if(!$query1)
{
	echo "error";
}
else{
	while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
{
	
	$order_id=$row['id'];
	$productid = $row['BookName'];
	$customername = $row['Username'];
	$customeremail = $row['User_email'];

	//$customerdistrict = $row['customer_district'];
	//$customeraddress = $row['customer_address'];
	$orderdate = $row['time'];
	//$ordertime = $row['order_time'];
	$BG = $row['Book_genre'];

$query2="SELECT * FROM $BG WHERE Name='$productid'";
$query3=mysqli_query($link1,$query2);
$row1=mysqli_fetch_array($query3,MYSQLI_ASSOC);
$productname=$row1['Name'];
$productprice=$row1['Price'];
$productcode=$row1['ISBN_number'];

$query3="SELECT * FROM user_record WHERE Full_name='$customername'";
$query4=mysqli_query($link,$query3);
$row2=mysqli_fetch_array($query4,MYSQLI_ASSOC);
$customerphone = $row2['Phone'];

?>

<div class="tableadmin">
<table  >

<tbody>
    <tr>
        <td width="200px" ><?php echo $customername; ?></td>
     <td width="200px"><?php echo $customeremail; ?> </td>
    
    <td width="200px"><?php echo $customerphone; ?> </td>
    
    
    
    <td width="200px"><?php echo $orderdate; ?> </td>
   
    
    
    <td width="200px"><?php echo $productname; ?> </td>
    
    
    <td width="200px"><?php echo "Rs. ".$productprice.""; ?> </td>
    <td width="200px"><a href= " ordersindividualview.php?orderer=<?php echo $order_id ?> " ><input type="submit" name="view" value="view order"></a>
    </tr>
    
    </tbody>
</table><br/>
</div>

</div>
<?php

}

}


?>
</div>



<style type="text/css">
	.tableadmin{
		padding-top:15px;
		background-color: snow;
	}
	.tableadmin:hover{
		background-color: #8A7E7E;
	}
	.ordertable{
		background-color: snow;
	}
	.ordering{
		padding-top: 80px;
	}
</style>