<!DOCTYPE html>
<html lang="en">
<head>
<title>잇(it)다♥ 검색</title>
<?
	$cookie_no=$_COOKIE[cookie_no];
	$cookie_name=$_COOKIE[cookie_name];
?>
<?
	include "common.php";
	$text1 = $_REQUEST[text1];

	if(!$text1)
		$query = "select * from member where gender = 2 order by name ;";
	else
		$query = "select * from member where uid like '%$text1%' or name like '%$text1%' and gender = 2 order by name;";

	$result=mysqli_query($db, $query);
	if(!$result) exit("ERROR : $query");

	$count=mysqli_num_rows($result);
?>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<body>

<script>
	function SendCom(no, name){
		opener.form2.com_no.value = no;
		opener.form2.com_name.value = name;
		self.close();
	}
</script>

<div class="container">
	<div class="col-md left">
		<table width="80%" border="0">
			<form name="form2" method="post" action="">
			<tr height="50">
				<td width="45%" align="right" valign="bottom">
					<input type="text" name="text1" size="15" value="<?=$text1?>" class="font9">&nbsp;&nbsp;
				</td>
				<td width="60" valign="bottom" align="left">
					<input type="button" class="btn btn-default btn-sm" value="검색" onclick="javascript:form2.submit();">&nbsp;
				</td>
			</tr>
			</form>
		</table><br>
	</div>

		<table width="80%" border="1" class ="table table-sm">
			<tr bgcolor="#CCCCCC" height="20"> 
				<td width="15%" align="center"><font color="5b5b5b"><b>이름</b></font></td>
				<td width="15%" align="center"><font color="5b5b5b"><b>구분</b></font></td>
			</tr>
			
		  <?
			$count=mysqli_num_rows($result);
			$page=$_REQUEST[page];
			if (!$page)$page=1;
			$pages=ceil($count/$page_line);
			$first=1;
			if($count>0)$first=$page_line*($page-1);
			$page_last=$count - $first;
			if($page_last>$page_line)$page_last=$page_line;
			if($count>0) mysqli_data_seek($result,$first);
			for($i = 0; $i < $page_last; $i++){
				$row=mysqli_fetch_array($result);
			if($row[gender]==2) $gender="기업";
?>
			<tr bgcolor='#F2F2F2' height='23'>
				  <td align='center' width='80%'><a href="javascript:SendCom(<?=$row[no];?>,'<?=$row[name];?>');"><?=$row[name]; ?></a></td>
				  <td align='center' width='20%'><?=$gender?></td>
		  </tr>
<?		}
		?>
		
		</table>

		<?
		$blocks = ceil($pages/$page_block);
		$block=ceil($page/$page_block);
		$page_s=$page_block*($block-1);
		$page_e=$page_block*$block;
		if($blocks<=$block)$page_e=$pages;

		echo("<table width='400' border='0'>
					<td height='20' align='center'>");

		if ($block > 1) {
			$tmp = $page_s;
			echo("<a href='con_findcompany.php?page=$tmp&text1=$text1'>
			<img src = 'images/i_prev.gif' align='absmiddle' border='0'>
			</a>&nbsp");
		}
		for ($i=$page_s+1; $i<=$page_e; $i++) {
			if ($page == $i)
				echo("<font color = '#FC0504'><b>$i</b></font>&nbsp");
			else
				echo("<a href='con_findcompany.php?page=$i&text1=$text1'>[$i]</a>&nbsp");
		}
		if ($block < $blocks){
			$tmp = $page_e+1;
			echo("&nbsp<a href='con_findcompany.php?page=$tmp&text1=$text1'>
			<img src='images/i_next.gif' align='absmiddle' border='0'></a>");
		}
		echo("
					</td>
				</tr>
			</table>");
		?>
		</center>
</div>
</body>
</html>