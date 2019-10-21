<?php
	$db= mysqli_connect("localhost","root","it_da_ifp5","up_da");
	
	mysqli_set_charset($db,"utf-8");
	if (mysqli_connect_errno($db))
	{
	   echo "Failed to connect to MySQL: " . mysqli_connect_error();
	}
	$address = $_POST['Address'];
	
	$result = mysqli_query($db,"select member_id, detail_address from for_sale where address='$address'");
	
	$count = mysqli_num_rows($result);
	
	for($i=0; $i<$count; $i++) {
		$row = mysqli_fetch_array($result);
		if($result) {
			echo $row[member_id]."#".$row[detail_address]."#";
		}
		else echo 'failure';
	}
	mysqli_close($db);
?>
