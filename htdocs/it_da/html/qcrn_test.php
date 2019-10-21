<?
	include "common.php";

	extract($_POST);
	extract($_GET);
	
	$object = simplexml_load_string($response);

	print_r($object);
?>