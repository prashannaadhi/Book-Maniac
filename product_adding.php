<?php
    ob_start();
    if(session_id()=="")
    {
        session_start();
    }
	 $conn=mysqli_connect('localhost', 'root', '', 'products');
   $mail='';
?>

<?php
	$errors = array();

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
  }

if (isset($_POST['addP'])) {
  if (empty($_POST["Book_name"])) {
    array_push($errors, "Name is required");
  } else {
    $Book_name = test_input($_POST["Book_name"]);
    // check if name only contains letters and whitespace
    if (!preg_match("/^[a-zA-Z ]*$/",$Book_name)) {
      array_push($errors,"Only letters and white space allowed"); 
    }
  }

    if (empty($_POST["ISBN_number"])) {
    array_push($errors, "Username is required");
  } else {
    $bookid = $_POST["ISBN_number"];
  }
  
  if (empty($_POST["Author"])) {
    array_push($errors, "Author is required");
  } else {
    $author = test_input($_POST["Author"]);
    if (!preg_match("/^[a-zA-Z ]*$/",$author)) {
      array_push($errors,"Only letters and white space allowed"); 
    }
  }
    
  if (empty($_POST["Edition"])) {
    array_push($errors, " Enter valid book edition");
  } else {
    $edition = $_POST["Edition"];
  }

    $publication = test_input($_POST["Publication"]);

  if (empty($_POST["Genre"])) {
    array_push($errors,"Genre is required");
  } else {
    $genre = $_POST["Genre"];
  }
$mail=$_SESSION['EMAIL'];
// inserting data
 if (count($errors) == 0) {
  $target="product_photo/".$genre."/";

  echo $target;
  $filepath='';
  if (!empty($_POST['fileToUpload'])) {
	 move_uploaded_file( $_FILES["fileToUpload"]["tmp_name"],$target. $_FILES["fileToUpload"]["name"]);
		$filepath=$target.$_FILES['fileToUpload']['name'];
		$_SESSION['filepath']=$filepath;
}

	$sql = "INSERT INTO contribution (User,ISBN_number,Name, Author,Edition,Publication,CoverPic,Genre)
		VALUES ('$mail','$bookid' ,'$Book_name','$author','$edition','$publication', '$filepath','$genre')";

	if (!mysqli_query($conn,$sql)) { echo ' Not inserted';}
	else { echo 'Inserted' ;
        header('location:profile.php');}
 }
}
?>