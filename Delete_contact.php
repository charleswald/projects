<?php
include('connect_to_db.php');
include 'title.html'; 

$sql="SELECT * FROM contacttable";

$result=mysql_query($sql);

$displaytop ='

<table border="1" Method="post" cellpading="7">
	
	<tr>
		
		<td> Contact Id</td>
		<td> First Name</td>
		<td>Second Name </td>
		<td>Email</td>
		<td> Phone Number</td>
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
	$phonenumber=$row['PhoneNumber'];
	$gname=$row['groupname'];
	

$displaytable ='<table border="1"  cellpading="7">
	
	<tr>
		
		<td> '.$id.' </td>
		<td> '.$fname.' </td>
		<td> '.$sname.' </td>
		<td> '.$email.' </td>
		<td> '.$phonenumber.' </td>
		<td> '.$gname.' </td>
	
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
<?php

?>
</head>
<body>
	<div id='contact'>
	<form method='post' name='process' action='delete_contact_where.php' >
	<h4>Enter the Id of a Contact you want to Delete</h4></br>
		
	<label for='id'>ID</label>
	<input type='text' name='id'></br></br></br>
	
	<input type='submit' value='Submit'>
	</div>
</body>
</html>