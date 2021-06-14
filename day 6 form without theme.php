<?php
include "connection1.php";

 
 if($_POST)
{
	$st_name = $_POST['name'];
	$st_gender = $_POST['gender'];
	$st_dob = $_POST['dob'];
	$st_email = $_POST['email'];
	$st_mobile = $_POST['mobile'];
	$st_address = $_POST['address'];
	$st_password = $_POST['password'];
	$st_area = $_POST['area'];
	$st_pincode= $_POST['pincode'];
	$st_blodgroup = $_POST['bloodgroup'];
	
	$q = mysqli_query($link,"insert into tb1_student values('$st_name','$st_gender','$st_dob','$st_email','$st_mobile','$st_address','$st_password','$st_area','$st_pincode','$st_blodgroup')");
	if($q)
    {
	echo "<script> alert('record added');</script>";
    }
}
?>

<html>
<body>
<form method="POST">
Name : <input type="text" name="name" />
<br>
Gender : <select name="gender">
<option> Male</option>
<option> Female</option>
</select>
<br>
DOB : <input type="number" name="dob" /><br>
Email-id : <input type="text" name="email" /><br>
Mobile : <input type="number" name="mobile" /><br>
Address : <input type="text" name="address" /><br>
Password : <input type="text" name="password" /><br>
Area : <input type="text" name="area" /><br>
Pincode : <input type="text" name="pincode" /><br>
Blood group : <input type="text" name="bloodgroup" /><br>
<input type="submit"/>
</form>
</body>
</html> 
<?php
echo "<a href='day7table.php'> display record</a>";
?>