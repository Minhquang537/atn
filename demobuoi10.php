<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title></title>
</head>
<body>
	<!--câu lệnh if...else-->
	<?php
	$a=5;
	$b=10;
	echo("giai phương trình bậc nhất"  .$a."x+$b=0 <br/>");
	if($a==0){
	 if($b==0){
	      echo ("phương trình có vô số nghiệm !" );
	 }
	 else{
		echo("phuong tình vô nghiệm !");
	 }
	}  
	else{
		$x=-$b/$a;
		echo("phương trình có một nghiệm x=$x <br/>");
	}
	?>
	<!--vòng lặp-->
	<!--if($gender==0)
	    echo"male";
	elseif($gender==1);
	    echo "female";
	else
		echo "undelined";
	-!>
	<?php
	$items=array("1,2,3");
	foreach($items as $item){
		echo $item."<br/>";
	} 
	?>
	<!- mảng-->
	<!-- chỉ mục-->
	<!--       -->
	<!---      -->
	<!--example-->
	<?php
	$arr[1]="a";
	$arr[2]="b";
	$arr[3]="c";
	$arr[4]="d";
	$arr[5]="e";
	for($i=1;$i<=count($arr);$i++){
		echo"$i: $arr[$i]<br/>";
	}
	?>
	<!-- mảng liên kết-->
    <form action="welcome.php" method="post">
    	<table>
    		Name:<input type="text" name="username">
    		Pass word: <input type="text" name="password">
    		<input type="submit" name="submit" value="gui di ">
    	</table>
    </form>




</body>
</html>