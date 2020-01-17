<?php
require_once("connection.php");
session_start();
	if(isset($_POST['submit']))
	{
		$name=$_POST['name'];
		$to_=$_POST['to_'];
		$leavereason=$_POST['leavereason'];
		$fromdate=$_POST['fromdate'];
		$todate=$_POST['todate'];
		


$sql="INSERT INTO applyleave(name,to_,leavereason,fromdate,todate) VALUES('".$name."','".$to_."','".$leavereason."','".$fromdate."','".$todate."')";
    if(!$result=$conn->query($sql))
	{
		die('there was an error running in the query['.$conn->error.']');
	}
	echo "thank you";
	
}
?> 