<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
	<style type="text/css">
		
	</style>
</head>
<body >
<table>
	<tr>
		<td><p>Don't have account?<a href="http://localhost/PBIT17102%20WEBSITE/buoi7.php">Register Here</a></p>
	    </td>
	 </tr>
	 <tr>
	 	<td><lable>username</lable></td>
	    <td><input type="text"name="username"style="text-align: right;">
	    </td>
	</tr>
	<tr>
	<td><label>Password</label></td>
	<td><input type="text" name="Password" style="text-align: right;"></td>
    </tr>
    <tr>
    <td></td>
	<td><a href="">fogot password</a></td>
    </tr>
    <tr>
    	<td></td>
    	<td><input type="submit" name="login" value="login"></td>
    </tr>
	</form>
</div>
<?php 

//Kết nối theo Mysqli procedural
$connect = mysqli_connect('localhost','root','','mydb');
if($connect){
echo "Kết nối thành công";
}
else{
echo"Kết nối thất bại";
}
   // Nếu click vào nút login thì mới thực hiện 
if (isset($_POST['login'])) {
    $username= $_POST['username'];
    $password= $_POST['password'];
    // Truy vấn từ bảng user cột username = giá trị username nhập từ form và cột password = giá trị password nhập từ form
    $sql = "SELECT * FROM name WHERE username ='$username' AND password = '$password'";
    // Thực thi truy vấn
    $result = mysqli_query($connect, $sql);
    // Trả về kết quả , chính là các dòng được truy vấn
    $row = mysqli_num_rows($result);
    // Nếu $row > 0 --> có trên 1 dòng trong CSDL trùng với dữ liệu nhập vào form -> đăng nhập thành công 
    if($row>0){
       echo "<script> alert('Đăng nhập thành công')</script>";
    }
    else{
        echo"Tên đăng nhập hoặc mật khẩu không đúng";
    }
}
?>

</body>
</html>