<?php
include('connect_to_db.php');
include 'title.html'; 

$sql="SELECT * FROM contacttable";

$result=mysql_query($sql);

$displaytop ='<table border="1"  cellpading="7">
	
	<tr>
		
		<td> Id</td>
		<td>First Name</td>
		<td>Second Name</td>
		<td>Email Address</td>
		<td>Phone Number</td>
		<td>Group Name</td>
		</tr>
		<tr>
		
		
	</tr>
	</table>';
	
	echo $displaytop;

while ($row=mysql_fetch_array($result))
{
	$id=$row['contactid'];
	$fname=$row['FirstName'];
	$sname=$row['SecondName'];
	$email=$row['Email'];
	$phone=$row['PhoneNumber'];
	$gname=$row['groupname'];
	

$displaytable ='<table border="1"  cellpading="7">
	
	<tr>
		
		<td>'.$id.' </td>
		<td> '.$fname.'</td>
		<td> '.$sname.'</td>
		<td> '.$email.'</td>
		<td> '.$phone.'</td>
		<td> '.$gname.'</td>
		</tr>
		<tr>
		
		
	</tr>
	</table>';
	
	echo $displaytable;
}


?>

<DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en' style="background-color:brown">
<head><title>Contact Registration Form</title>

</head>
<body>
	<div id='contact'>
	<form method='post' name='process' action='contact_update_db.php' >
	<h2>Contact Registration</h2></br>
	
	<p>Enter Id for contact you want to change</p>
	
	<label for='Id'>Id</label>
	<input type='text' name='id'></br>
	
	<p>Enter New Details</p>
	<Table>
	<tr>
	<td><label for='firstname'>First Name</label></td>
	<td><input type='text' name='firstname'></td>
	</tr>
	<tr>
	<td><label for='secondname'>Second Name</label></td>
	<td><input type='text' name='secondname'></td>
	</tr>
	<tr>
	<td><label for='emailaddress'>Email Address</label></td>
	<td><input type='text' name='emailaddress'></td>
	</tr>
	<tr>
	<td><label for='phonenumber'>Phone Number</label></td>
	<td><input type='text' name='phonenumber'></td>
	</tr>
	<tr>
	<td><label for='group'>Group Name</label></td>
	<td><input type='text' name='group'></td>
	</tr>
	<tr>
	<td><input type='submit' value='Update'></td>
	</tr>
	</div>
</body>
</html>