<?php
	$db= mysqli_connect("localhost","root","it_da_ifp5","up_da");
	
	mysqli_set_charset($db,"utf-8");
	if (mysqli_connect_errno($db))
	{
	   echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$userid = $_POST['Id'];
	$address = $_POST['Address'];
	$detailaddress = $_POST['DetailAddress'];
	
	$result = mysqli_query($db,"insert into for_sale(member_id, address, detail_address) values('$userid','$address','$detailaddress')");
	
	if($result) echo '등록 성공';
	else echo 'failure';

	mysqli_close($db);
?>