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
				<td>username:</td>
				<td><input type="text" name="username"></td>
			</tr>
			<tr>
				<td>password:</td>
				<td><input type="password" name="password"></td>
			</tr>
			<tr>
				<td></td>
				<td><input type="submit" name="logoin" value="login"></td>
			</tr>
		</table>
	</form>
		<div class="container">
		<div class="row">
			<ul class="nav nav-tabs">
				<li><span class="glyphicon glyphicon-home"> Home</span></li>
				<li><span class="glyphicon glyphicon-user"> Guest</span></li>
			</ul>
		</div>
	</div>
	<div class="container">
	<nav class="navbar navbar-inverse">
  <div class="container-fluid">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">WebSiteName</a>
    </div>
    <div class="collapse navbar-collapse" id="myNavbar">
      <ul class="nav navbar-nav">
        <li class="active"><a href="#">Home</a></li>
        <li><a href="#">Page 1</a></li>
        <li><a href="#">Page 2</a></li>
        <li><a href="#">Page 3</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right">
        <li><a href="#"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>
        <li><a href="#"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>
      </ul>
    </div>
  </div>
</nav>
<!--slide chuyen dong-->
<div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner">
    <div class="item active">
      <img src="https://maybomruaxe.net/wp-content/uploads/2021/05/ca-si-so-1-viet-nam-1.jpg" alt="son tung " style="width:600px;height:600px">
    </div>

    <div class="item">
      <img src="https://image.thanhnien.vn/w980/Uploaded/2022/mftum/2021_03_06/img_0467_lsvb.jpg" alt="My Tam "style="width:600px;height:600px">
    </div>

    <div class="item">
      <img src="https://avatar-ex-swe.nixcdn.com/singer/avatar/2018/06/27/e/8/8/5/1530074198530_600.jpg" alt="Ha Anh Tuan">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="left carousel-control" href="#myCarousel" data-slide="prev">
    <span class="glyphicon glyphicon-chevron-left"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="right carousel-control" href="#myCarousel" data-slide="next">
    <span class="glyphicon glyphicon-chevron-right"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<?php 

//K???t n???i theo Mysqli procedural
$connect = mysqli_connect('localhost','root','','tunesourcewebsite');
if($connect){
echo "K???t n???i th??nh c??ng";
}
else{
echo"K???t n???i th???t b???i";
}
   // N???u click v??o n??t login th?? m???i th???c hi???n 
   if(isset($_POST['login'])){
    $username= $_POST['username'];
    $passwordd= $_POST['password'];
    // Truy v???n t??? b???ng name c???t username = gi?? tr??? username nh???p t??? form v?? c???t password = gi?? tr??? password nh???p t??? form
    $sql = "SELECT*FROM users WHERE username ='$username' AND passwordd = '$password'";
    // Th???c thi truy v???n
    $result = mysqli_query($connect, $sql);
    // Tr??? v??? k???t qu??? , ch??nh l?? c??c d??ng ???????c truy v???n
    $row = mysqli_num_rows($result);
    // N???u $row > 0 --> c?? tr??n 1 d??ng trong CSDL tr??ng v???i d??? li???u nh???p v??o form -> ????ng nh???p th??nh c??ng 
    if($row>0){
       echo "<script> alert('????ng nh???p th??nh c??ng')</script>";
    }
    else{
        echo"T??n ????ng nh???p ho???c m???t kh???u kh??ng ????ng";
    }
   }
?>
</body>
</html>