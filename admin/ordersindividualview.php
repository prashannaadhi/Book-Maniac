<link rel="stylesheet" href=../style/css/bootstrap.min.css>
<script src="../style/js/bootstrap.min.js"></script>
<link rel="stylesheet" href=../style/style.css>

<?php
include('adminheader.php');

?>
<?php
$db='eshop';
$link = mysqli_connect("127.0.0.1", "root", "", "records");
$link1 = mysqli_connect("127.0.0.1", "root", "", "products");
?>


<?php
if(isset($_GET['orderer']))
{
    $order_id=$_GET['orderer'];
}

?>
<div class="ordersubmit">
<?php
$query="SELECT * FROM bs_record WHERE id='$order_id'";
$query1=mysqli_query($link,$query);
if(!$query1)
{
    echo "error";
}
else{
    $row=mysqli_fetch_array($query1,MYSQLI_ASSOC);
    $productid = $row['ISBN'];
    $customername = $row['Username'];
    $customeremail = $row['User_email'];

    $orderdate = $row['time'];
    //$ordertime = $row['order_time'];
    //$sentdate= $row['sent_date'];
    //$senttime=$row['sent_time'];
    //$deliver_date=$row['delivered_date'];
//$delivered_time=$row['delivered_time'];
    $BG = $row['Book_genre'];

$query2="SELECT * FROM $BG WHERE ISBN_number='$productid'";
$query3=mysqli_query($link1,$query2);
$row1=mysqli_fetch_array($query3,MYSQLI_ASSOC);
$productname=$row1['Name'];
$productprice=$row1['Price'];
$productcode=$row1['ISBN_number'];

$query3="SELECT * FROM user_record WHERE Full_name='$customername'";
$query4=mysqli_query($link,$query3);
$row2=mysqli_fetch_array($query4,MYSQLI_ASSOC);
$customerphone = $row2['Phone'];
$PayType = $row2['PaymentCard'];

$query3="SELECT * FROM user_record WHERE Full_name='$customername'";
$query4=mysqli_query($link,$query3);
$row2=mysqli_fetch_array($query4,MYSQLI_ASSOC);
$customerdistrict = $row2['Country'];
$customeraddress = $row2['Address_full'];
?>



<table class="table table-hover" >
<tbody>
    <tr>
        <td>Name</td><td><?php echo $customername; ?></td>
    </tr>
    <tr >
    <td>email id </td><td><?php echo $customeremail; ?> </td>
    </tr>
    <tr >
    <td>Phone number </td><td><?php echo $customerphone; ?> </td>
    </tr>
    <tr>
    <td>District </td><td><?php echo $customerdistrict; ?> </td>
    </tr>
    <tr>
    <td>Address </td><td> <?php echo $customeraddress; ?></td>
    </tr>
    <tr>
    <td>Order Date </td><td><?php echo $orderdate; ?> </td>
    </tr>
    <tr>
    <td>Order Number </td><td><?php echo $order_id; ?> </td>
    </tr>
    <tr>
    <td>product Name </td><td><?php echo $productname; ?> </td>
    </tr>
    <tr >
    <td>product price </td><td><?php echo "Rs. ".$productprice.""; ?> </td>
    </tr>
    <tr>
    <td>product code</td><td><?php echo $productid; ?> </td>
    </tr>
    <tr>
    
    <td>payment type</td><td><?php echo "BY ".$PayType; ?> </td>
    </tr>
    </tbody>
</table><br/>

 </div>
<?php } 
echo mysqli_error($link);?>

 <h2>Actions</h2>
 <form method="post">
 <input type="submit" name="send_delivery" value="Confirm for delivery">
 <input type="submit" name="delete_delivery" value="Remove delivery">
</form>

 <?php
if(isset($_POST['send_delivery']))
{
    $query1=mysqli_query($link,$query);
    if($query1)
    {
        $query = "UPDATE `bs_record` SET `Ostatus` = '2' WHERE `bs_record`.`id` = $order_id;";
        $query1=mysqli_query($link,$query);
          $query2 = "UPDATE `bs_record` SET `deliver_time` WHERE `bs_record`.`id` = $order_id;";
        $query3=mysqli_query($link,$query);
        header('location:orders.php');
    }

}

 ?>

 <?php
if(isset($_POST['delete_delivery']))
{
            $query = "DELETE  FROM bs_record WHERE id=$order_id";
        $query1=mysqli_query($link,$query);
        if($query1)
        {
             header('location:orders.php');
        }
}

 ?>