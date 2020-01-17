<!DOCTYPE html>
<html>
<head>
<title>Faculty page</title>
<link rel="stylesheet" href="css/style2.css">
<style></style>
</head>
<body class="b">
<div class="menubar">
<ul>
<li><a href="faculty.php">Faculty Page</a></li>
<right><li><a href="logout.php">Logout</li></a></right>
</ul>
</div>
<div class="gal">
<img src="img/orisys2.jpg">
</div>
<!-- content start -->
<div class="cont">
<center><h2><font color="white">FACULTY REGISTRATION</h2></center></font><br>
<form action="insert2.php" method= "POST"> 

<h3>Factid:</h3>
<input type="text" class="frm" name="factid" placeholder="factid">
<h3>Name:</h3>
<input type="text" class="frm" name="name" placeholder="name">
<h3>Address:</h3>
<input type="text" class="frm" name="address" placeholder="address">
<h3>Dob:</h3>
<input type="date" class="frm" name="dob" placeholder="">
<h3>Gender</h3>
<p><input type="radio" name="gender"checked>male
<input type="radio"  name="gender" checked>female<br>
<br><h3>Qualification:</h3>
<select input type="text" class="frm" name="qualification" placeholder="qualification">
<option value="qualification"></option>	
<option value="btech cs">BTECH-CS,MTECH-CS</option>
<option value="bca">BCA,MCA</option>
 <option value="BTECH EC">BTECH-EC,MTECH-EC</option>
<option value="bsc cs">BSC-CS,MSC-CS</option>
<option value="mbbs">MBBS</option>
</select>
<h3>Mobile:</h3>
<input type="text" class="frm" name="mobile" placeholder="mobile">

<h3>Assigned Batch:</h3>
<select input type="text" class="frm" name="assignedbatch" placeholder="assignedbatch">	
                    <option value="assignedbatch"></option>
                        <option value="JSD1">JSD1</option>	
                          <option value="JSD2">JSD2</option>	
                                          <option value="UI">UI</option>	
                                            <option value="ED">ED</option>	
                                           <option value="FS">FS</option>
                                        </select>
<h3>Username:</h3>
<input type="text" class="frm" name="username" placeholder="username">
<h3>Password:</h3>
<input type="text" class="frm" name="password" placeholder="password">										
										
                                    <center><br><input type="submit" name="submit" class="frm-btn" value="submit"></center>
</form>
</div>
<!-- content end -->
<!-- footer start -->
<footer>
<div class="ft">
<p>&copy;2018-2019 company inc, privacy terms</p>
</div>
</footer>
  <!-- footer end -->
</body>
</html>