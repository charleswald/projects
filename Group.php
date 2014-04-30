<DOCTYPE html PUBLIC '-//W3C//DTD XHTML 1.0 Transitional//EN' 'http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd'>
<html xmlns='http://www.w3.org/1999/xhtml' xml:lang='en' lang='en' style="background-color:brown">
<head><title>New Group</title>
<?php
include 'title.html';
?>
</head>
<body>
	<div id='group'>
	<form method='post' name='group' action='group_activity.php'>
	<h4><i>Add Group</i></h4></br>
	<Table>
	<tr>
	
	<td><label for='groupname'>Group Name</label></td>
	<td><input type='text' name='groupname'></br></td>
	
	</tr>
	<tr>
	<td><label for='description'>Description</label></td>
	<td><input type='text' name='description'></br></td>
	</tr>
	<tr>
	<td><input type='submit' value='Submit'></td>
	</tr>
	</div>
</body>
</html>