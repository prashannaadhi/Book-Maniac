<?php
include('adminheader.php');

?>
<link rel="stylesheet" href=../style/css/bootstrap.min.css>
<script src="../style/js/bootstrap.min.js"></script>
<?php
$db='eshop';
$link = mysqli_connect("127.0.0.1", "root", "", "$db");

?>
<div class = "updateproduct">
<?php
if(isset($_GET['productid']))
{
	$iproduct=$_GET['productid'];
$query= "SELECT * FROM products WHERE id=$iproduct";
$result=mysqli_query($link,$query);
while($row=mysqli_fetch_array($result,MYSQLI_ASSOC))
      {
           $productid=$row['id'];
          $producttype =$row['product_type'];
          $productname=$row['product_name'];
          $productprice=$row['product_price'];
          $productcode=$row['product_code'];
          $productphoto=$row['product_photo'];
          $productdesc=$row['product_description'];
           $quantity=$row['quantity'];    

}
}
?>




<form method="post" enctype="multipart/form-data" class="form-group">
product name<br/> <input type="text" name="productname" id="product" autocomplete="off" class="form-control" value="<?Php echo $productname; ?>"><br/>

product code<br/> <input type="text" name="productcode" id="productcode" autocomplete="off" class="form-control" value="<?PHP echo $productcode; ?>"><br/>
quantity<br/> <input type="text" name="productquantity" id="productquantity" autocomplete="off" class="form-control" value="<?PHP echo $quantity; ?>"><br/>

price<br/> <input type="text" name="price" autocomplete="off" id="productprice" class="form-control" value="<?PHP echo $productprice; ?>"><br/>
Description<br/> <input type="text" name="description" id="productdescription" autocomplete="off" class="form-control" value="<?PHP echo $productdesc; ?>"> <br/>
product photo<br/><input type="file" class="btn btn-success"  for="my-file-selector" name="user_image" value="<?php echo $productphoto; ?>" accept="image/*"><br/><br/>
<p>
product category
<select name="category" class="btn btn-default dropdown-toggle" role="menu" id="selector" >
  <option value="<?php echo $producttype;?>">Select...</option>
  <option value="womens_fashion">Womens fashion wears</option>
  <option value="mens_fashion">mens fashion wears</option>
  <option value="watches">watches</option>
  <option value="glasses">Glasses</option>
  <option value="mobiles">Mobile phones</option>
  <option value="computers">computers and laptops</option>
  <option value="sports">sports</option>
  <option value="shoes">shoes</option>
  <option value="musics">musics</option>
  <option value="others">others</option>
  
</select>
</p>

<input type="submit" name="submit" value="save" class="btn btn-success">
<input type="submit" name="delete" value="delete" class="btn btn-danger">
</form>

<?php

if(isset($_POST['submit']))
{ 
  $productname=$_POST['productname'];
  $productcode=$_POST['productcode'];
  $productprice=$_POST['price'];
  $description=$_POST['description'];
  $category=$_POST['category'];
  $quantity=$_POST['productquantity'];
  
  


if($productname==''||$productcode==''||$productprice==''||$description==''||$category==''||$quantity=='')
{
  echo "please fill all the forms";

}
else 
{


$file_name=$_FILES['user_image']['name'];
  $file_type=$_FILES['user_image']['type'];
  $file_size=$_FILES['user_image']['size'];
  $file_tmp_name=$_FILES['user_image']['tmp_name'];
  $destination = "photo/".$file_name;

if($file_name)
  {
  
    move_uploaded_file($file_tmp_name, $destination);
    
 }

  $query="UPDATE  products SET product_type='$category',product_name='$productname',product_price='$productprice',product_code='$productcode',product_photo='$destination',product_description='$description',quantity='$quantity' WHERE id='$iproduct'";
 $query1=mysqli_query($link,$query);
 {
 	header('location:allproducts.php');
 }


}
}

?>

<?php
if(isset($_POST['delete']))
{
	$query="DELETE  FROM products WHERE id='$iproduct'";
	$query1=mysqli_query($link,$query);
	if(!$query1)
	{
		echo mysqli_error($link);
	}
	else{
		header('location:allproducts.php');
	}
}

?>
</div>

<style type="text/css">
	.updateproduct{
		padding-top: 80px;
		height:100%;
    margin-left: 200px;
	}
	
  #product{
width:500px;
  }
  #productprice{
width:500px;
  }
  #productdescription{
width:500px;
  }
  #productcode{
    width:500px;
  }
  #productquantity{
    width:500px;
  }
</style>