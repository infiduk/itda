<?php
	$db= mysqli_connect("localhost","root","it_da_ifp5","up_da");
	
	mysqli_set_charset($db,"utf-8");
	if (mysqli_connect_errno($db))
	{
	   echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$userid = $_POST['Id'];
	$userpw = $_POST['Pw'];
	
	$result = mysqli_query($db,"insert into member (id, password) values('$userid','$userpw')");
	
	if($result) echo '가입 성공! 로그인 해주세요.';
	else echo 'failure';

	mysqli_close($db);
?>
