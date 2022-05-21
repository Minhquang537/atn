
<?php 
$servername = "localhost";
$username = "root";
$password = "";
$database = "mydb";
//Kết nối theo Mysqli procedural
$connect = mysqli_connect($servername,$username,$password,$database);
if($connect){
	echo "Kết nối thành công</br>";
}
else{
	echo"Kết nối thất bại";
}
$sql = "INSERT INTO name VALUES(3,'trinh','11113')";
// dùng hàm mysqli_query để thực thi câu lệnh sql 

$result =mysqli_query($connect,$sql);
if($result){
	echo"Thêm mới người dùng thành công";
}
else{
	echo"Thêm mới thất bại";
}
?>
