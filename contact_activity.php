<?php
include'connect_to_db.php';
include 'title.html';
$fname=$_POST['firstname'];
$lname=$_POST['secondname'];
$email=$_POST['emailaddress'];
$phone=$_POST['phonenumber'];
$group=$_POST['group'];


if($fname=="")
{
	echo "Enter the first name";
	return;
}
else if($lname=="")
{
	echo "Enter the Last name";
	return;
}
else if($email=="")
{
	echo "Enter Your Email";
	return;
}else
	$sql="INSERT INTO contacttable(FirstName,SecondName,Email,PhoneNumber,groupname) VALUES('$fname','$lname','$email','$phone','$group')";
	$result=mysql_query($sql);
	if(!$result)
	{echo "Records were not submitted";}
	else
	{echo "Records submitted";}
?>