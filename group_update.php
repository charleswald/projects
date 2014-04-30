<?php
include('connect_to_db.php');
include 'title.html';

$groupname= $_POST['groupname'];
$newgroupname= $_POST['newgroupname'];
$groupdescription= $_POST['newdesc'];


if($groupname=="")
{
	echo "Enter the Group name";
	return;
}
else if($groupdescription=="")
{
	echo "Please Describe the Group";
	return;
}
else if($newgroupname=="")
{
	echo "Please Enter New Details 4 the Group";
	return;
}
else 

//$sql="CREATE TABLE IF NOT EXISTS $groupname($groupname varchar , $groupdescription varchar )";
//$sql="CREATE TABLE IF NOT EXISTS ".$groupname."(".$groupname." varchar , ".$groupdescription." varchar )";

$sql="Update grouptable SET groupname='".$newgroupname."', description='".$groupdescription."' where groupname='".$groupname."'";
$result=mysql_query($sql);
if(!$result)
{echo "Not Updated...something is wrong";}
else
{echo "Group Updated";}
?>