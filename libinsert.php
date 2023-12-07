<html>
<body>
<?php
require('bcon.php');
if(isset($_POST['sub']))
{
$bookname=$_POST['Bookname'];
$authorname=$_POST['Author'];
$publisher=$_POST['Publisher'];
$quantity=$_POST['Quantity'];
$prize=$_POST['Prize'];
$sql="insert into librarymanagement(Bookname,Author,Publisher,Quantity,Prize)values('$bookname','$authorname','$publisher','$quantity','$prize')";
$result=mysqli_query($conn,$sql);


if($result)
{
       echo"new record successfully created";
}
mysqli_close($conn);
}
else
{
?>
<form align="center"method="POST"action="">
<fieldset>
<h1>Library Management</h1>
<label> Bookname</label>         
<input type="text" name="Bookname"> <br> <br>  
<label> Author </label>     
<input type="text" name="Author"> <br> <br>  
<label>Publisher</label>
<input type="text" name="Publisher"> <br><br>

<label> Quantity </label>         
<input type="int" name="Quantity"<br><br><br>

<label> Prize </label>         
<input type="int" name="Prize"<br><br><br>


<input type="SUBMIT" name="sub">
<input type="RESET">
</fieldset>
<?php
}
?>
</form>
</body>
</html>





