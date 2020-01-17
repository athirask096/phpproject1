<!DOCTYPE html>
<html>
<head>
<title></title>
<link rel="stylesheet" href="{% static 'css/style5.css' %}">

<style>
table,th,td{border:1px solid black;border-collapse:collapse}
</style>
</head>
<body class="b">
<div class="menubar">
<ul>
</ul>
</div>
<div>

                
            <h1>Students</h1>
            <table>
                <thead>
                    <tr>
                        <th>Student id</th>
                        <th>AdmNo</th>
                        <th>Name</th>
                        <th>Address</th>
                        <th>dob</th>
                        <th>gender</th>
                        <th>mobile</th>
                        <th>Admdate</th>
                        <th>guardian</th>
                        <th>batch</th>
                        <th>username</th>
                        <th>password</th>
                    </tr>

                </thead>
                <tbody>
					<?php
					require_once 'connection.php';
					$sql="select * from studentregistration";
                    $result=mysqli_query($conn,$sql);
					while($row=mysqli_fetch_assoc($result))
					{
				    ?>
					<tr>
						<td><?php echo $row['stdid'];?></td>
						<td><?php echo $row['admnno'];?></td>
						<td><?php echo $row['name'];?></td>
						<td><?php echo $row['address'];?></td>
						<td><?php echo $row['dob'];?></td>
						<td><?php echo $row['gender'];?></td>
						<td><?php echo $row['mobile'];?></td>
						<td><?php echo $row['admdate'];?></td>
						<td><?php echo $row['guardian'];?></td>
						<td><?php echo $row['batch'];?></td>
						<td><?php echo $row['username'];?></td>
						<td><?php echo $row['password'];?></td>
					</tr>
					<?php
					}
					?>
                </tbody>
            </table>

        </div>
    </div>
    </body>
</html>
        