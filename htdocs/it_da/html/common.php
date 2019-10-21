<?
	error_reporting(E_ALL & ~E_NOTICE);
	ini_set("display_error",1);
	$db = mysqli_connect("localhost", "root","it_da_ifp5","it_da");
	if (!$db) exit ("DB연결에러");

	$page_line=5;
	$page_block=5;
	
?>