
<?
	include "common.php";
	$uid=$_REQUEST[uid];
?>
<html>
<head>
<title>중복ID 조회</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="include/font.css">
<script src="js/jquery-2.2.3.min.js"></script>
<script language = "javascript">
	function submit_flag(flag)
	{
		opener.form2.check_id.value = flag;
		opener.check_email();
		self.close();
	}


</script>

<body bgcolor="#FFFFFF" text="#000000"  marginwidth="0" marginheight="0">
<?
$query="select * from member where uid='$uid';";
$result=mysqli_query($db,$query);
if(!$result) exit("에러: $query");
$count=mysqli_num_rows($result);
if ($count==0)
	echo("<script type='text/javascript'>submit_flag('true');</script>");
else
	echo("<script type='text/javascript'>submit_flag('');</script>");
?>

	 
</body>
</html>