<html>
<head>
</head>
<body>
<form method="post"action="update2.php">
<?php
require('connect.php');
if(isset($_POST['sub']))
{
$id=$_POST['txt1'];
$sql="select * from library where Id=$id";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
	while($row=mysqli_fetch_assoc($result))
	{
		echo "ID:"."<input type='text' name='id' value=".$row['Id']."><br>";
		echo "Book Name:"."<input type='text' name='bn' value=".$row['Book_name']."><br>";
		echo "Author:"."<input type='text' name='at' value=".$row['Author']."><br>";
		echo "Publisher:"."<input type='text' name='pub' value=".$row['Publisher']."><br>";
		echo "Quantity:"."<input type='text' name='qn' value=".$row['Quantity']."><br>";
		echo "Prize:"."<input type='text' name='pz' value=".$row['Prize']."><br><br>";
	}
}
mysqli_close($conn);
}
?>
<input type="submit" name="sub1" value="Update">
</form>
</body>
</html>
