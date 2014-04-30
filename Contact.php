<DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en' style="background-color:brown">
<head><title>Contact Registration Form</title>
<?php
include 'title.html';
?>
</head>
<body>
	<div id='contact'>
	<form method='post' name='process' action='contact_activity.php' >
	<h4><i>Contact Registration</i></h4></br>
	<Table>
	<tr>
	<td><label for='firstname'>First Name</label></td>
	<td><input type='text' name='firstname'></br></td>
	</tr>
	<tr>
	<td><label for='secondname'>Second Name</label></td>
	<td><input type='text' name='secondname'></br></td>
	</tr>
	
	<tr>
	<td><label for='emailaddress'>Email Address</label></td>
	<td><input type='text' name='emailaddress'></br></td>
	</tr>
	
	<tr>
	<td><label for='phonenumber'>Phone Number</label></td>
	<td><input type='text' name='phonenumber'></br></td>
	</tr>
	<tr>
	<td><label for='group'>Group Name</label></td>
	<td><input type='text' name='group'></br></td>
	</tr>
	<tr>
	<td><input type='submit' value='Submit'></td>
	</tr>
	</div>
</body>
</html>
