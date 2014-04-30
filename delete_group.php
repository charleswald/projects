<?php
include('connect_to_db.php');
include 'title.html'; 

$groupname= $_POST['groupname'];



if($groupname=="")
{
	echo "Enter the Group name";
	return;
}
else 

$sql="SELECT * FROM grouptable where groupname='".$groupname."'";

$result=mysql_query($sql);
if(mysql_num_rows($result)!=0)
{
$sqldelete="DELETE FROM grouptable where groupname='".$groupname."'";
$deleteresult=mysql_query($sqldelete);
if($deleteresult)
	echo "Group Deleted";
else 
	echo "Group not deleted";
}
else
{echo "The Group Does not exist";}
?>