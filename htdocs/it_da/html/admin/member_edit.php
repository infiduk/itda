<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "common.php";
	$no=$_REQUEST[no];

	$query = "select * from member where no = $no;";
	$result=mysqli_query($db,$query);
	if(!$result) exit("에러: $query");
	$row=mysqli_fetch_array($result);

	$birthday1=substr($row[birthday],0,4);
	$birthday2=substr($row[birthday],5,2);
	$birthday3=substr($row[birthday],8,2);

?>
<html>
<head>
<title>잇(IT)다 관리자 홈페이지</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
<script>
	function OpenWinZip(zip_kind)
	{
		window.open("zipcode.php?zip_kind="+zip_kind, "", "scrollbars=no,width=500,height=250");
	}
</script>
</head>

<body style="margin:0">

<center>

<br>
<script> document.write(menu());</script>
<br>
<br>

<form name="form2" method="post" action="member_update.php">

<input type="hidden" name="no" value="<?=$row[no];?>">

<table width="600" border="1" cellpadding="2"  style="border-collapse:collapse">
	<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">이름</td>
		<td width="500" bgcolor="#F2F2F2">
			<input type="text" name="name" value="<?=$row[name];?>" size="20" maxlength="20">
		</td>
	</tr>
		<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">성별</td>
		<td width="500" bgcolor="#F2F2F2">
	<?
		if ($row[gender]==0) 
          echo("<input type='radio' name='gender' value='0' checked>남성
                   <input type='radio' name='gender' value='1'>여성");
       else
          echo("<input type='radio' name='gender' value='0' >남성
                   <input type='radio' name='gender' value='1' checked>여성");
	?>
		</td>
	</tr>
	<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">생년월일</td>
		<td width="500" bgcolor="#F2F2F2">
      <input type="text" name="birthday1" size="4" value="<?=$birthday1;?>">-
      <input type="text" name="birthday2" size="2" value="<?=$birthday2;?>">-
      <input type="text" name="birthday3" size="2" value="<?=$birthday2;?>">
		</td>
	</tr>
	<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">ID</td>
		<td width="500" bgcolor="#F2F2F2"><?=$row[uid];?></td>
	</tr>
	<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">비밀번호</td>
		<td width="500" bgcolor="#F2F2F2">
			<input type="text" name="pwd" value="<?=$row[pwd];?>" size="20" maxlength="20">
		</td>
	</tr>
		<tr height="20"> 
		<td width="100" align="center" bgcolor="#CCCCCC">ACCOUNT</td>
		<td width="500" bgcolor="#F2F2F2"><?=$row[account];?></td>
	</tr>
</table>

<br>
<table width="800" border="0" cellspacing="0" cellpadding="7">
	<tr> 
		<td align="center">
			<input type="submit" value="수정하기"> &nbsp;&nbsp
			<input type="button" value="이전화면" onClick="javascript:history.back();">
		</td>
	</tr>
</table>

</form>

</center>

<br>
</body>
</html>