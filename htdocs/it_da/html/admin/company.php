<!-------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML) -->
<!--                                                                                  -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                            -->
<!-------------------------------------------------->	
<?
	include "common.php";
	$text1 = $_REQUEST[text1];
	$sel1 = $_REQUEST[sel1];

	if(!$text1)
		$query = "select * from member where gender = 2 order by name ;";
	else {
		if($sel1==1)
			$query = "select * from member where name like '%$text1%' and gender = 2 order by name;";
		else if ($sel1==2)
			$query = "select * from member where uid like '%$text1%' and gender = 2 order by uid;";
		else 
			$query = "select * from member where uid like '%$text1%' or name like '%$text1%' and gender = 2 order by name;";
	}

	$result=mysqli_query($db, $query);
	if(!$result) exit("ERROR : $query");

	$count=mysqli_num_rows($result);
?>
<html>
<head>
<title>잇(IT)다 관리자 홈페이지</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
</head>

<body style="margin:0">

<center>

<br>
<script> document.write(menu());</script>

<table width="800" border="0">
	<form name="form1" method="post" action="company.php">
	<tr height="40">
		<td width="200" valign="bottom">&nbsp 기업회원수 : <font color="#FF0000"><?=$count?></font></td>
		<td width="540" align="right" valign="bottom">
			
			<?
				echo("<select name='sel1'>");
				for($i=0; $i<$n_idname; $i++)
				{
					if($sel1==$i)
						echo("<option value='$i'selected>$a_idname[$i]</option>");
					else
						echo("<option value='$i'>$a_idname[$i]</option>");
				}
				echo("</select>");
			?>

			<input type="text" name="text1" size="15" value="<?=$text1?>" class="font9">&nbsp
		</td>
		<td width="60" valign="bottom">
			<input type="button" value="검색" onclick="javascript:form1.submit();">&nbsp
		</td>
	</tr>
	</form>
</table>

<table width="940" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr bgcolor="#CCCCCC" height="23"> 
		<td width="15%" align="center">이름</td>
		<td width="10%" align="center">생년월일</td>
		<td width="15%" align="center">ID</td>
		<td width="10%" align="center">비밀번호</td>
		<td width="25%" align="center">ACCOUNT</td>
		<td width="10%" align="center">수정/삭제</td>
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
		if ($row[category]==0) $category="개인"; else $category="기업";

  echo("<tr bgcolor='#F2F2F2' height='23'>
		  <td align='center'>$row[name]</td>
		  <td align='center'>$row[birthday]</td>
		  <td align='left'>$row[uid]</td>
		  <td align='center'>$row[pwd]</td>
		  <td align='center'>$row[account]</td>
		  <td align='center'><a href='company_edit.php?no=$row[no]'>수정</a>/<a href='company_delete.php?no=$row[no]&page=&sel1=&text1=' onClick='javascript:return confirm(\"삭제할까요?\");'>삭제</a></td>
  </tr>");

}
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

if ($block > 1)
{
	$tmp = $page_s;
	echo("<a href='company.php?page=$tmp&text1=$text1'>
	<img src = 'images/i_prev.gif' align='absmiddle' border='0'>
	</a>&nbsp");
}
for ($i=$page_s+1; $i<=$page_e; $i++)
{
	if ($page == $i)
		echo("<font color = '#FC0504'><b>$i</b></font>&nbsp");
	else
		echo("<a href='company.php?page=$i&text1=$text1'>[$i]</a>&nbsp");
}
if ($block < $blocks)
{
	$tmp = $page_e+1;
	echo("&nbsp<a href='company.php?page=$tmp&text1=$text1'>
	<img src='images/i_next.gif' align='absmiddle' border='0'></a>");
}
echo("
			</td>
		</tr>
	</table>");
?>
</center>

</body>
</html>