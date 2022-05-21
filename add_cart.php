<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<?php 

//Kết nối theo Mysqli procedural
$connect = mysqli_connect('localhost','root','','mydb');
$id=$_GET['id'];
if (isset($_SESSION['username'])) {
	echo $_SESSION['use_id'];
	$use_id= $_SESSION['use_id'];
	$sql="INSERT INTO cart VLAUES ('','$cart_id','$use_id','1')";
	$result=mysqli_query($connect,$sql);
	if($result){
		echo"<script>alert('Add to cart successfully!')</script>";
	}
	else{
		echo "<script>alert('Add to cart failed!')</script>";
	}
}
else{
	echo"<script>alert('you need login to add to cart')</script>";
}
?>
</body>
</html>