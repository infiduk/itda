<?
	include "common.php";

	$no=$_REQUEST[no];
	$query="delete from req_cert where no=$no;";
	$result=mysqli_query($db,$query);
	if(!$result) exit("$query");	

	echo("location.href='req_list.php'");
?>