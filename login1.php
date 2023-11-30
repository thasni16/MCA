<html>
<head>
<title>Login</title>
</head>
<body>
<?php
require('connect.php');
if(isset($_POST['submit']))
{

$name=$_POST['txt1'];
$password=$_POST['txt2'];
$sql="select * from userregistration where Username='$name' AND  Password='$password'";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
echo "Success";
}
else
{
echo"Login failed";
}
mysqli_close($conn);
}
else
{
?>
<form align="center" action="" method="POST">
<fieldset>
	<h2><u><b>LOGIN</b></u></h2>

 	<label for="un">Username</label>
	<input type="text" name="txt1" id="un"><br><br>

	<label for="pwd">Password</label>
	<input type="text" name="txt2" id="pwd"><br><br>

	<i><b>New User?</b></i><a href="registration.html"target="_self">Register</a><br><br>

	<input type="submit" value="Sign in" name="submit" id="sub">&nbsp

	<input type="reset" value="Clear" name="ret" id="rset"><br>
</fieldset>
<?php
}
?>
</form>
</body>
</html>