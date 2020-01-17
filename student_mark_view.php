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
						$sql="select * from studentmark where stdid=$var";
						$result=mysqli_query($conn,$sql);
						while($row=mysqli_fetch_assoc($result))
						{
					?>
			 <h1><?php  echo $row['name'];?></h1><br>
			
<table>

   
    <tr>
        <td>StudentId</td><td>:</td><td><?php echo $row['stdid'];?></td>
    </tr>
	
    <tr>
        <td>Name</td><td>:</td><td><?php echo $row['name'];?></td>
    </tr>
    <tr>
        <td>AssessmentNo</td><td>:</td><td><?php echo $row['assessmentno'];?></td>
    </tr>
    <tr>
        <td>Sub1mark</td><td>:</td><td><?php echo $row['sub1mark'];?></td>
    </tr>
	<tr>
        <td>Sub2mark</td><td>:</td><td><?php echo $row['sub2mark'];?></td>
    </tr>
	<tr>
        <td>Sub3mark</td><td>:</td><td><?php echo $row['sub3mark'];?></td>
    </tr>
	<tr>
        <td>Percentage</td><td>:</td><td><?php echo $row['percentage'];?></td>
    </tr>
    
</table>
<?php
								}
							?>
            

</form>
        </div>
	</div>
	</body>
</html>
		




</body>
</html>
