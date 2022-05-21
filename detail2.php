<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<div class="content">
 	<!-- Lấy id từ trang chủ -->
 	<?php 
 	$connect = mysqli_connect('localhost','root','','mydb');
 		$id = $_GET["id"];
 		$sql ="SELECT * FROM product WHERE product_id = {$id}";
 		$result = mysqli_query($connect, $sql);
 		while($row = mysqli_fetch_array($result)){
 			?>

 			<div style="float:left">
 				<!-- hiển thị ảnh sản phẩm -->
 				<img src="Img/<?php echo $row['product_img'] ?>" width="400px" height="400px">
		 	</div>
		    <div>
		    	<h2> Tên sản phẩm: <?php echo $row['product_name'] ?></h2>
		    	<button> Add to Cart</button>
		    </div>
    <?php
 		}
 	?>
 	
 </div>

</body>
</html>