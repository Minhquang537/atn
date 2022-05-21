<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	 <form method="POST">
		<table>
			<tr>
				<td>user id :</td>
				<td><input type="text" name="user_id"></td>
			</tr>
			<tr>
				<td>username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="register" value="register"></td>
			</tr>
		</table>
	</form>
	<?php 

//Kết nối theo Mysqli procedural
$connect = mysqli_connect('localhost','root','','mydb');
if($connect){
echo "Kết nối thành công";
}
else{
echo"Kết nối thất bại";
}
   // Nếu click vào nút register thì mới thực hiện 
   if(isset($_POST['register'])){
   	$user_id=$_POST['user_id'];
    $username= $_POST['username'];
    $password= $_POST['password'];
    $sql = "INSERT INTO name VALUES('$user_id','$username','$password')";
    // Thực thi truy vấn
    $result = mysqli_query($connect, $sql); 
    if($result){
       echo "<script> alert('đăng kí thành công')</script>";
    }
    else{
        echo"đăng ký không thành công";
    }
   }
?>

</body>
</html>