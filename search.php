<html>

<head>
<title>search</title>
</head>
<body>
<?php
require('connect1.php');
if(isset($_POST['sub']))
{
$id=$_POST['txt1'];
$sql="select * from library where Id=$id";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo "Book Name:".$row["Book_name"]."<br>";
echo "Author:".$row["Author"]."<br>";
echo "Publisher:".$row["Publisher"]."<br>";
echo "Quantity:".$row["Quantity"]."<br>";
echo "Price:".$row["Price"]."<br><br>";
}
}
else
{
echo "Failed";
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