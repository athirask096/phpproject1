<?php
require_once("connection.php");
session_start();
	if(isset($_POST['submit']))
	{
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
		


$sql="INSERT INTO studentregistration(stdid,admnno,name,address,dob,gender,mobile,admdate,guardian,batch,username,password)VALUES('".$stdid."','".$admnno."','".$name."','".$address."','".$dob."','".$gender."','".$mobile."','".$admdate."','".$guardian."','".$batch."','".$username."','".$password."')";
    if(!$result=$conn->query($sql))
	{
		die('there was an error running in the query['.$conn->error.']');
	}
	echo "thank you";
	
}
?> 