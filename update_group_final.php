<?php
include('connect_to_db.php');
include 'title.html'; 

$sql="SELECT * FROM grouptable";

$result=mysql_query($sql);

$displaytop ='<table border="3" Method="post" cellpading="7">
	
	<tr>
		
		<td> Group Name</td>
		<td> Description</td>
		</tr>
		<tr>
		
		
	</tr>
	</table>';
	
	echo $displaytop;

while ($row=mysql_fetch_array($result))
{
	$name=$row['groupname'];
	$description=$row['description'];
	

$displaytable ='
<table border="3" Method="post" cellpading="7">
	
	<tr>
		
		<td> <input type="text" name="name" value= "'.$name.'" </td>
		<td> <input type="text" name="description" value= "'.$description.'" </td>
		</tr>
		<tr>
		
		
	</tr>
	</table>';
	
	echo $displaytable;
}


?>

<DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en'  style="background-color:brown">
<head><title>Contact Registration Form</title>
<?php

?>
</head>
<body>
	<div id='contact'>
	<form method='post' name='process' action='group_update.php' >
	<p>Enter the Name of a group you want to Change</p></br>
		
	<label for='groupname'>Group Name</label>
	<input type='text' name='groupname'></br>
	
	<p>Enter the New Details</br></br>
	<Table>
	<tr>
	<td><label for='newgroupname'>Group Name</label></td>
	<td><input type='text' name='newgroupname'></br></td>
	</tr>
	<tr>
	<td><label for='newdesc'>Description</label></td>
	<td><input type='text' name='newdesc'></br></td>
	</tr>
	<tr>
	<td><input type='submit' value='Submit'></td>
	</tr>
	</div>
</body>
</html>