<html>

<head>
<title>delete</title>
</head>
<body>
<?php
require('connect1.php');
if(isset($_POST['sub']))
{
$id=$_POST['txt1'];
$sql="delete from library where Id=$id";
$result=mysqli_query($conn,$sql);
if($result)
{
echo "one record successfully deleted";
}
else
{
echo "failed";
}
mysqli_close($conn);
}
else
{
?>
<form method="POST" align="center">
<h2>Enter ID:</h2>
<input type="text" name="txt1" ></h2><br>
<input type="submit" name="sub" value="Submit">
<?php
}
?>
</form>
</body>
</html>