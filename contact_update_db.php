<?php
include('connect_to_db.php');
include 'title.html';

$id= $_POST['id'];
$newfname= $_POST['firstname'];
$newsname= $_POST['secondname'];
$newemail= $_POST['emailaddress'];
$newphone= $_POST['phonenumber'];
$newgroup= $_POST['group'];


if($newfname=="")
{
	echo "Enter the first name";
	return;
}
else if($newsname=="")
{
	echo "Please Enter the Second Name";
	return;
}

else if($newemail=="")
{
	echo "Please Enter the Email";
	return;
}

else if($newphone=="")
{
	echo "Please Enter the Phone Number";
	return;
}

else if($newgroup=="")
{
	echo "Please Enter Group Name";
	return;
}
else if($id=="")
{
	echo "Enter an Id";
	return;
}
else 

//$sql="CREATE TABLE IF NOT EXISTS $groupname($groupname varchar , $groupdescription varchar )";
//$sql="CREATE TABLE IF NOT EXISTS ".$groupname."(".$groupname." varchar , ".$groupdescription." varchar )";

$sql="Update contacttable SET FirstName='".$newfname."', SecondName='".$newsname."', Email='".$newemail."', PhoneNumber='".$newphone."', groupname='".$newgroup."' where contactid='".$id."'";
$result=mysql_query($sql);
if(!$result)
{echo "Not Updated...something is wrong";}
else
{echo "Group Updated";}
?>