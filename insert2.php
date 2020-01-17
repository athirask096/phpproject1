<?php
require_once("connection.php");
session_start();
	if(isset($_POST['submit']))
	{
		$factid=$_POST['factid'];
		$name=$_POST['name'];
		$address=$_POST['address'];
		$dob=$_POST['dob'];
		$gender=$_POST['gender'];
		$qualification=$_POST['qualification'];
		$mobile=$_POST['mobile'];
		$assignedbatch=$_POST['assignedbatch'];
		$usename=$_POST['username'];
		$password=$_POST['password'];


$sql="INSERT INTO faculty(factid,name,address,dob,gender,qualification,mobile,assignedbatch,username,password) VALUES('".$factid."','".$name."','".$address."','".$dob."','".$gender."','".$qualification."','".$mobile."','".$assignedbatch."','".$usename."','".$password."')";
    if(!$result=$conn->query($sql))
	{
		die('there was an error running in the query['.$conn->error.']');
	}
	echo "thank you";
	
}
?> 