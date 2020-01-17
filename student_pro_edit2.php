<?php
include_once 'connection.php';
$stdid=$_POST['stdid'];
$admnno=$_POST['admnno'];
$name=$_POST['name'];
$address=$_POST['address'];
$dob=$_POST['dob'];
$gender=$_POST['gender'];
$mobile=$_POST['mobile'];
$admdate=$_POST['admdate'];
$guardian=$_POST['guardian'];
$batch=$_POST['batch'];
$username=$_POST['username'];
$password=$_POST['password'];
if(isset($_POST['submit']))
{
	$sql="UPDATE studentregistration SET address='".$address."',dob='".$dob."',gender='".$gender."',mobile='".$mobile."',admdate='".$admdate."',guardian='".$guardian."',batch='".$batch."',username='".$username."',password='".$password."' where name='".$name."'";                                    
	if(!$result=$conn->query($sql))
	{
		die('there was an error running the query['.$conn->error.']');
	}
	else
	{
	 require_once "studentprof.php";
	}
}
?>	
