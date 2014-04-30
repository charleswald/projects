<?php
include('connect_to_db.php');
include 'title.html'; 

$contactid= $_POST['id'];



if($contactid=="")
{
	echo "Enter the Contact ID";
	return;
}
else 

$sql="SELECT * FROM contacttable where contactid='".$contactid."'";

$result=mysql_query($sql);
if(mysql_num_rows($result)!=0)
{
$sqldelete="DELETE FROM contacttable where contactid='".$contactid."'";
$deleteresult=mysql_query($sqldelete);
if($deleteresult)
	echo "Contact Deleted";
else 
	echo "Contact not deleted";
}
else
{echo "The Contact Does not exist";}
?>