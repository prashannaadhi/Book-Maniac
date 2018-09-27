<?php
include('adminheader.php');

?>
<div class="addproductclass">


<link rel="stylesheet" href=../style/css/bootstrap.min.css>
<script src="../style/js/bootstrap.min.js"></script>
<?php
$db='products';
$link = mysqli_connect("127.0.0.1", "root", "", "$db");

?>

<form method="post" enctype="multipart/form-data" class="form-group">
Book name<br/> <input type="text" name="bookname" id="bookname" autocomplete="off" class="form-control" value="<?PHP if(isset($_POST['bookname'])) echo htmlspecialchars($_POST['bookname']); ?>"><br/>
Author<br/> <input type="text" name="author" id="author" autocomplete="off" class="form-control" value="<?PHP if(isset($_POST['author'])) echo htmlspecialchars($_POST['author']); ?>"><br/>
ISBN <br/> <input type="text" name="isbn" id="isbn" autocomplete="off" class="form-control" value="<?PHP if(isset($_POST['isbn'])) echo htmlspecialchars($_POST['isbn']); ?>"><br/>
quantity<br/> <input type="text" name="productquantity" id="productquantity" autocomplete="off" class="form-control" value="<?PHP if(isset($_POST['productquantity'])) echo htmlspecialchars($_POST['productquantity']); ?>"><br/>
price<br/> <input type="text" name="price" autocomplete="off" id="productprice" class="form-control" value="<?PHP if(isset($_POST['price'])) echo htmlspecialchars($_POST['price']); ?>"><br/>
Description<br/> <input type="text" name="description" id="productdescription" autocomplete="off" class="form-control" value="<?PHP if(isset($_POST['description'])) echo htmlspecialchars($_POST['description']); ?>"> <br/>
Cover photo<br/><input type="file" class="btn btn-success"  for="my-file-selector" name="book_image" accept="image/*"><br/><br/>
<p>
Genre
<select name="genre" class="btn btn-default dropdown-toggle" role="menu" id="selector">
  <option value="">Select...</option>
  <option value="arts">arts</option>
  <option value="literature">literature</option>
  <option value="religious">religious</option>
  <option value="science">science</option>
</select>
</p>

<input type="submit" name="submit" value="submit" class="btn btn-success">
</form>

<?php

if(isset($_POST['submit']))
{ 
  $bname=$_POST['bookname'];
  $bauthor=$_POST['author'];
  $isbn=$_POST['isbn'];
  $bprice=$_POST['price'];
  $description=$_POST['description'];
  $genre=$_POST['genre'];
  $quantity=$_POST['productquantity'];
 

if($bname==''||$bauthor==''||$isbn==''||$bprice==''||$description==''||$genre==''||$quantity=='')
{
  echo "please fill all the forms";

}
else 
{


$file_name=$_FILES['book_image']['name'];
  $file_type=$_FILES['book_image']['type'];
  $file_size=$_FILES['book_image']['size'];
  $file_tmp_name=$_FILES['book_image']['tmp_name'];
  $destination = "product_photo/".$file_name;

if($file_name)
  {
  
    move_uploaded_file($file_tmp_name, $destination);
    
 }

  $query="INSERT INTO $genre(ISBN_number,Name,Author,Price,CoverPic,Synopsis,Genre) VALUES('$isbn','$bname','$bauthor','$bprice','$destination','$description','$genre')";
 if(mysqli_query($link,$query))
{
  
  }
else
{
  echo mysqli_error($link);
}
}
}

?>
</div>
<style type="text/css">
  .addproductclass{
    padding-top: 80px;
    height:100%;
    margin-left: 200px;
  }
  #productname{
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