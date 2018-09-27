<link rel="stylesheet" href=../style/css/bootstrap.min.css>
<script src="../style/js/bootstrap.min.js"></script>
<link rel="stylesheet" href=../style/style.css>

<?php
include('adminheader.php');

?>
<?php
$db='eshop';
$link = mysqli_connect("127.0.0.1", "root", "", "products");
$link1 = mysqli_connect("127.0.0.1", "root", "", "user");
?>


<?php
if(isset($_GET['orderer']))
{
    $order_id=$_GET['orderer'];
}

?>
<div class="ordersubmit">
<?php
$query="SELECT * FROM contribution WHERE id='$order_id'";
$query1=mysqli_query($link,$query);
if(!$query1)
{
    echo "error";
}
else{
    $row=mysqli_fetch_array($query1,MYSQLI_ASSOC);
    $productid = $row['ISBN_number'];
    $productname = $row['Name'];
    $customername = $row['User'];
    $author = $row['Author'];
    $edition = $row['Edition'];
    $publication = $row['Publication'];
    $note = $row['Synopsis'];
    $key = $row['SearchKey'];
    //$customeremail = $row['User_email'];

    $orderdate = $row['time'];
    //$senttime=$row['sent_time'];
    //$delivered_time=$row['deliver_time'];
    $BG = $row['Genre'];

$query3="SELECT * FROM signin_info WHERE Email='$customername'";
$query4=mysqli_query($link1,$query3);
$row2=mysqli_fetch_array($query4,MYSQLI_ASSOC);
$customeremail = $row2['Email'];
$customername = $row2['Name'];
if($row2['Status']==1){$customername=$customername." {Registered User} ";}
else { $customername=$customername." { Not-Registered User} ";}
?>



<table class="table table-hover" >
<tbody>
    <tr>
    <td>Product Name</td><td><?php echo $productname; ?></td>
    </tr>
    <tr >
    <td>Product id </td><td><?php echo $productid; ?> </td>
    </tr>

    <tr >
    <td>User Name </td><td><?php echo $customername; ?> </td>
    </tr>
    <tr >
    <td>User Email </td><td><?php echo $customeremail; ?> </td>
    </tr>

    <tr>
    <td>product genre</td><td><?php echo $BG; ?> </td>
    </tr>
    <tr>
    <td>Author </td><td><?php echo $author; ?> </td>
    </tr>
    <tr>
    <td>Edition</td><td><?php echo $edition; ?> </td>
    </tr>
    <tr>
    <td>Publication</td><td><?php echo $publication; ?> </td>
    </tr>

    
    <tr>
    <td>Addeded date</td><td><?php echo $orderdate; ?> </td>
    </tr>
    
    </tbody>
</table><br/>

 </div>
<?php } ?>
 
 <h2>Actions</h2>
 <form method="post" enctype="multipart/form-data">
    <table><tr>
        <td>Cover Picture for Book: </td> <br>
        <td> <input type="file" name="fileToUpload" id="fileToUpload"> <br> </td>
        </tr><tr>
        <td>Price for Book: </td> <br>
        <td> <input type="text" name="price"> <br> </td>
        </tr>
    </table>
 <input type="submit" name="send_delivery" value="Insert Book">
 <input type="submit" name="delete_delivery" value="Remove Book">
</form>
 <?php
if(isset($_POST['send_delivery']))
{
    $query1=mysqli_query($link,$query);
    if($query1)
    {
        $target="../product_photo/".$BG."/";
        $price = $_POST['price'];

        move_uploaded_file( $_FILES["fileToUpload"]["tmp_name"],$target. $_FILES["fileToUpload"]["name"]);
        $filepath=$target.$_FILES['fileToUpload']['name'];
        $_SESSION['filepath']=$filepath;

        $query = "DELETE  FROM contribution WHERE ID=$order_id ";
        $query1=mysqli_query($link,$query);

        $query2 = "INSERT INTO $BG (ISBN_number,Name,Author,Edition,Price,Publication,CoverPic,SearchKey,Genre,Synopsis)VALUES ('$productid','$productname','$author','$edition','$price','$publication','$filepath','$key','$BG','$note')";
        $query3=mysqli_query($link,$query2);
        echo mysqli_error($link);
        header('location:contribution.php');
    }

}

 ?>

 <?php
if(isset($_POST['delete_delivery']))
{
            $query = "DELETE  FROM contribution WHERE ID=$order_id";
        $query1=mysqli_query($link,$query);
        if($query1)
        {
             header('location:contribution.php');
        }
}

 ?>
 