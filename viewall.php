<html>
<head>
</head>
<body>
<?php
require('connect.php');
$sql="select* from library";
$result=mysqli_query($conn,$sql);
if(mysqli_num_rows($result)>0)
{
while($row=mysqli_fetch_assoc($result))
{
echo "bookname".$row["Book_name"]."<br>";
echo "author".$row["Author"]."<br>";
echo "publisher".$row["Publisher"]."<br>";
echo "quantity".$row["Quantity"]."<br>";
echo "prize".$row["Pize"]."<br>";
}
}
else
{
echo "failed";
}
mysqli_close($conn);
?>
</body>
</html>