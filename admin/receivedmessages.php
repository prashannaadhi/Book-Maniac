<?php
include('adminheader.php');

?>
<a href="dashboard.php">dashboard</a>
<link rel="stylesheet" href=../style/css/bootstrap.min.css>
<script src="../style/js/bootstrap.min.js"></script>
<?php
$db='eshop';
$link = mysqli_connect("127.0.0.1", "root", "", "$db");
?>
<div class="receivedmessage">
<table>
<thead>
<th width="200px" >NAME </th>
<th width="200px" >Email</th>
<th width="200px" >Message</th>

</thead>

</table>

<?php
$query="SELECT * FROM user_contacts";
$query1=mysqli_query($link,$query);


while($row=mysqli_fetch_array($query1,MYSQLI_ASSOC))
{   
	$id=$row['id'];
	$username=$row['username'];
	$email =$row['email_id'];
	$messages=$row['message'];

	?>


<div class="tableadmin">

<table  >

<tbody>
    <tr>
        <td width="200px" ><?php echo $username; ?></td>
    
    <td width="200px"><?php echo $email; ?> </td>
    
    
    
    <td width="200px"><?php echo $messages; ?> </td>
   <form method="post">
    <td width="200px"><input type="submit" value="delete" name="delete" id="delete"></td>
    </form>
    </tr>
    
    </tbody>
</table>
</div>
</div>
</div>


<?php
if(isset($_POST['delete']))
{
	$query="DELETE FROM user_contacts WHERE id='$id'";
	$query1=mysqli_query($link,$query);
	if(!$query1)
	{
		echo mysql_error($link);
	}
	else{
		header('location:receivedmessages.php');
		exit();}
	
}

}



?>

<style type="text/css">
	.message{
		margin-left: 20px;
		padding-top: 20px;
		background-color: snow;
		border: 1px solid #D9D9D9;
    padding: 10px;
	}
	.message:hov]\


	er {
    cursor: pointer;
    background-color: white;
}
.deletemessage{
	float:right;
	margin-right: 10px;
	padding-bottom:10px;
}
#delete{
	background-color: skyblue;
	border-radius: 3px;
	text-decoration-color: white;
	float:right;
}
#delete:hover{
	color:white;
}
.receivedmessage{
	padding-top: 80px;
	background-color: snow;
}
.tableadmin{
		padding-top:15px;
		background-color: snow;
	}
	.tableadmin:hover{
		background-color: white;
	}
</style>
