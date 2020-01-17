<!DOCTYPE html>
<html>
<head>
<title>
</title>
<link rel="stylesheet" href="css/style3.css">
<style>
</style>

</head>
<body class="b1">
<div class="navbar">
<ul>
<li>Edit

<div class="submenu">
<ul>
<li><a href="password.php">Password</a></li>
<li><a href="mobile.php">Mobile</a></li>
<li><a href="email.php">Email</a></li>
</ul>
</div>
</li>
<li><a href="logout.php">Logout</a></li>
</ul>
</div>




<form>
		            <?php
						require_once 'connection.php';
						session_start();
						$var=$_SESSION['stdid'];
						$sql="select * from studentattendance where stdid=$var";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
			 <h1><?php  echo $row['name'];?></h1><br>
			
<table>

   
    <tr>
        <td>Date</td><td>:</td><td><?php echo $row['date'];?></td>
    </tr>
	
    <tr>
        <td>Student ID</td><td>:</td><td><?php echo $row['stdid'];?></td>
    </tr>
	<tr>
        <td>Name</td><td>:</td><td><?php echo $row['name'];?></td>
    </tr>
    <tr>
        <td>Hr1 status</td><td>:</td><td><?php echo $row['hr1status'];?></td>
    </tr>
    <tr>
        <td>Hr2 status</td><td>:</td><td><?php echo $row['hr2status'];?></td>
    </tr>
    <tr>
        <td>Hr3 status</td><td>:</td><td><?php echo $row['hr3status'];?></td>
    <tr>
        <td>Hr4 status</td><td>:</td><td><?php echo $row['hr4status'];?></td>
    </tr>
	
</table>
<?php
						}
?>
            
<br>

</form>
        </div>
	</div>
	</body>
</html>
		




</body>
</html>
