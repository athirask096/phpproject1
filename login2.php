<?php
	require_once("connection.php");
	session_start();
	if(isset($_POST['submit']))
	{
		$username=$_POST['username'];
		$password=$_POST['password'];
		$sql="select username from admin where username='".$username."' and password='".$password."'";
		$result= mysqli_query ($conn,$sql);
		if(mysqli_num_rows($result)>0)
		{
			while($row=mysqli_fetch_assoc($result))
			{
				header('location:admin.php');
			}
		}
		else
		{
			$sql="select * from faculty where username='".$username."' and password='".$password."'";
			$result= mysqli_query ($conn,$sql);
			if(mysqli_num_rows($result)>0)
			{
				while($row=mysqli_fetch_assoc($result))
				{
					session_start();
				    $_SESSION['factid']=$row['factid'];
					header('location:factpage.php');
				}
			}
		
			else
			{
				$sql="select * from studentregistration where username='".$username."' and password='".$password."'";
				$result= mysqli_query ($conn,$sql);
				if(mysqli_num_rows($result)>0)
				{
					while($row=mysqli_fetch_assoc($result))
					{
						
				        $_SESSION['stdid']=$row['stdid'];
						
						header('location:studentprof.php');
					}
				}
			
				
				else
				{
					echo "Name or Password incorrect";
				}
				
			}
		}
		mysqli_close($conn);
		
	}
?>