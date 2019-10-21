<?
	$company_name=$_REQUEST[company_name];
	$flag=$_REQUEST[flag];
?>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
</head>
<body>
	<form action="join_company.php" method="post" id="query_ok">
		<input type="hidden" name="company_name" value="<?=$company_name?>">
		<input type="hidden" name="flag" value="<?=$flag?>">
	</form>
	<?
		if(isset($flag)) echo("<script language='javascript'> document.getElementById('query_ok').submit();</script>");
	?>	
</body>
</html>