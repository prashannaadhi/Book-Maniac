<?php include('confirm.php') ?>
<!doctype html>
<html>
<head>
<title>
	Delivery info!!
</title>
</head>

<body>
<h2 align = "center"> Delivery information </h2> <br/>
	<form align="middle" action="address_form.php" method="post">
		<?php include('errors.php') ?>
	<table align = "center">
		<tr>
		<td> Full Name : </td>		
		<td> <input type = "text" name = "full_Name" placeholder = "Full Name"/> </td>
		</tr><tr>
		<td> Phone Number: : </td>		
		<td> <input type = "text" name = "phone" placeholder = "Phone Number"/> </td>
		</tr><tr>
		<td> Country : </td>		
		<td> <input type = "text" name = "Country" placeholder = "Country"/> </td>
		</tr><tr>

		<td> Full Address : </td>		
		<td> <input type = "text" name = "full_Address" placeholder = "Address, City, State"/> </td>
		</tr>
		<tr>
		<td> Card Type : </td> 
		<td> <select name="Ctype">
 			<option value="VISA">VISA</option>
  			<option value="MASTERCARD">MASTER CARD</option>
  			<option value="PAYPAL">PAYPAL</option>
  			<option value="NATIONAL">NATIONAL CARD</option>
			</select></td>
		</tr>
		<tr>
		<td> Account Number : </td>		
		<td> <input type = "text" size = "32" name = "ACCNum" placeholder = "Ac. Number"/> </td>
		</tr><tr>

		<td> Account Pin: </td>		
		<td> <input type = "password" size = "5" name = "Pin" placeholder = "PIN"/> </td>
		</tr><tr>

		<td> Remarks:  </td>		
		<td> <input type = "text" name = "comment" placeholder = "Remarks"/> </td>
		</tr>	
		<td> <button type = "submit" name = "INFO" class = "btn"> Confirm Data</button> </td>
	</table> <br>
	</form>
</body>
</html>	