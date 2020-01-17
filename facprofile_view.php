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




<form action="faculty_pro_edit2.php" method="POST">
				<?php
						require_once 'connection.php';
						session_start();
						$var=$_SESSION['factid'];
						$sql="select * from faculty where factid=$var";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
			 <h1><?php  echo $row['name'];?></h1><br>
			
<table>

   
    <tr>
        <td>FacultyId</td><td>:</td><td><?php echo $row['factid'];?></td>
    </tr>
    <tr>
        <td>Name</td><td>:</td><td><?php echo $row['name'];?></td>
    </tr>
    <tr>
        <td>Address</td><td>:</td><td><?php echo $row['address'];?></td>
    </tr>
    <tr>
        <td>DOB</td><td>:</td><td><?php echo $row['dob'];?></td>
    </tr>
    <tr>
        <td>Gender</td><td>:</td><td><?php echo $row['gender'];?></td>
    </tr>
    <tr>
        <td>Qualification</td><td>:</td><td><?php echo $row['qualification'];?></td>
    <tr>
        <td>Mobile</td><td>:</td><td><?php echo $row['mobile'];?></td>
    </tr>
	<tr>
        <td>AssignedBatch</td><td>:</td><td><?php echo $row['assignedbatch'];?></td>
    </tr>
	<tr>
        <td>Username</td><td>:</td><td><?php echo $row['username'];?></td>
    </tr>
    <tr>
        <td>Password</td><td>:</td><td><?php echo $row['password'];?></td>
    </tr>
</table>
<?php
								}
							?>
            
<br>
<a href="faculty_pro_edit.php">Edit Profile</a>
</form>
        </div>
	</div>
	</body>
</html>
		
</div>
</body>
</html>
