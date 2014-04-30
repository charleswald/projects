<?php
include('connect_to_db.php');


$groupname= $_POST['groupname'];
$groupdescription= $_POST['description'];


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
else 

//$sql="CREATE TABLE IF NOT EXISTS $groupname($groupname varchar , $groupdescription varchar )";
//$sql="CREATE TABLE IF NOT EXISTS ".$groupname."(".$groupname." varchar , ".$groupdescription." varchar )";

$sql="INSERT INTO grouptable(groupname,description) VALUES('$groupname','$groupdescription')";
$result=mysql_query($sql);
if(!$result)
{echo "Group Not Added";}
else
{echo "Group Added";}
?>