
<link rel="stylesheet" href=../style/css/bootstrap.min.css>
<script src="../style/js/bootstrap.min.js"></script>
<link rel="stylesheet" href=../style/style.css>
<?php
include('adminheader.php');

?>

<?php
//$link = mysqli_connect("127.0.0.1", "root", "", "records");
$link1 = mysqli_connect("127.0.0.1", "root", "", "products");
?>
<div class="ordersdelivered">
<div class="ordertable">

<div class="tablec">
<table    >
<thead>
<th width="200px" >NAME </th>
<th width="200px" >Book Name</th>
<th width="200px" >ID</th>
<th width="200px" >Book ID</th>
<th width="200px" >Book Genre</th>

<th width="200px" >Contribution Date date</th>
<th width="200px" ></th>
<th width="200px" ></th>


</thead>

</table>
</div>
<style type="text/css">
	.tablec{
		margin-left: 50px;
	}
</style>
<?php
$query="SELECT * FROM contribution ";
$query1=mysqli_query($link1,$query);
if(!$query1)
{
	echo "error";
}
else{
	while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
{
	
	$order_id=$row['ID'];
	$productid = $row['ISBN_number'];
	$product_name=$row['Name'];
	$customername = $row['User'];
	$bookgenre = $row['Genre'];
	//$customeremail = $row['User_email'];

	$orderdate = $row['time'];
	//$ordertime = $row['order_time'];
	//$sentdate= $row['sent_date'];
	//$senttime=$row['sent_time'];
    //$deliver_date=$row['delivered_date'];
	//$delivered_time=$row['delivered_time'];
	//$BG = $row['Genre'];
?>

<div class="tableadmin">
<table  >

<tbody>
    <tr>
        <td width="200px" ><?php echo $customername; ?></td>
    
    <td width="200px"><?php echo $product_name; ?> </td>
    
    
    
    <td width="200px"><?php echo $order_id; ?> </td>
    <td width="200px"><?php echo $productid; ?> </td>
    <td width="200px"><?php echo $bookgenre; ?> </td>
   
   <td width="200px"><?php echo $orderdate; ?> </td>
    

    <td width="200px"><a href= " contribution_individual.php?orderer=<?php echo $order_id ?> " ><input type="submit" name="view" value="view"></a>
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
	.ordersdelivered{
		padding-top: 80px;
	}
</style>