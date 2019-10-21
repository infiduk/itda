<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?
	include "common.php";

	$sel1=$_REQUEST[sel1];
	$sel2=$_REQUEST[sel2];
	$sel3=$_REQUEST[sel3];
	$sel4=$_REQUEST[sel4];
	$text1=$_REQUEST[text1];
	$page=$_REQUEST[page];

	if (!$sel1)   $sel1=0;
	if (!$sel2)   $sel2=0;
	if (!$sel3)   $sel3=0;
	if (!$sel4)   $sel4=1;
	if (!$text1) $text1=""; 
	      
	$k=0;
	if ($sel1 != 0)        { $s[$k] = "status22=" . $sel1;  $k++; }
	if ($sel2 == 1)       { $s[$k] = "icon_new22=1";      $k++; }
	elseif ($sel2==2)   { $s[$k] = "icon_hit22=1";         $k++; }
	elseif ($sel2==3)   { $s[$k] = "icon_sale22=1";       $k++; }
	if ($sel3 != 0)        { $s[$k] = "menu22=" . $sel3;   $k++; }
	if ($text1)
	{
	    if ($sel4==1)       { $s[$k] = "name22 like '%" . $text1 . "%'"; $k++; }
		elseif ($sel4==2) { $s[$k] = "code22 like '%" . $text1 . "%'"; $k++; }
	}
	if ($k> 0)
	{
	    $tmp=implode(" and ", $s); 
	    $tmp = " where " . $tmp;
	}
	$query="select * from product " . $tmp . " order by no22";
	

	
	$result=mysqli_query($db,$query); 
	if (!$result) exit("에러:$query");
	$count=mysqli_num_rows($result);    // 레코드개수
?>
<html>
<head>
<title>쇼핑몰 관리자 홈페이지</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
<script>
	function go_new()
	{
		location.href="product_new.php";
	}
</script>
</head>

<body style="margin:0">

<center>

<br>
<script> document.write(menu());</script>

<table width="800" border="0" cellspacing="0" cellpadding="0">
	<form name="form1" method="post" action="product.php">
	<tr height="40">
		<td align="left"  width="150" valign="bottom">&nbsp 제품수 : <font color="#FF0000"><?=$count?></font></td>
		<td align="right" width="550" valign="bottom">
<?

	

	echo("<select name='sel1'>");
	for($i=0;$i<$n_status;$i++)
	{
	    if ($i==$sel1)
	       echo("<option value='$i' selected>$a_status[$i]</option>");
	    else
	       echo("<option value='$i'>$a_status[$i]</option>");
	}
	echo("</select>");
	?>
&nbsp
<?
	echo("<select name='sel2'>");
	for($i=0;$i<$n_icon;$i++)
	{
	    if ($i==$sel2)
	       echo("<option value='$i' selected>$a_icon[$i]</option>");
	    else
	       echo("<option value='$i'>$a_icon[$i]</option>");
	}
	echo("</select>");
	?>
&nbsp
<?
	echo("<select name='sel3'>");
	for($i=0;$i<$n_menu;$i++)
	{
	    if ($i==$sel3)
	       echo("<option value='$i' selected>$a_menu[$i]</option>");
	    else
	       echo("<option value='$i'>$a_menu[$i]</option>");
	}
	echo("</select>");
	?>
&nbsp
<?
	echo("<select name='sel4'>");
	for($i=1;$i<$n_text1;$i++)
	{
	    if ($i==$sel4)
	       echo("<option value='$i' selected>$a_text1[$i]</option>");
	    else
	       echo("<option value='$i'>$a_text1[$i]</option>");
	}
	echo("</select>");

	
			 $query="select * from product " . $tmp . " order by no22";
?>
			<input type="text" name="text1" size="10" value="<?=$text1?>">&nbsp
		</td>
		<td align="left" width="120" valign="bottom">
			<input type="button" value="검색" onclick="javascript:form1.submit();"> &nbsp;&nbsp
			<input type="button" value="입력" onclick="javascript:go_new();">
		</td>
	</tr>
	<tr><td height="5"></td></tr>
	</form>
</table>


<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr bgcolor="#CCCCCC" height="23"> 
		<td width="100" align="center">제품분류</td>
		<td width="100" align="center">제품코드</td>
		<td width="280" align="center">제품명</td>
		<td width="70"  align="center">판매가</td>
		<td width="50"  align="center">상태</td>
		<td width="120" align="center">이벤트</td>
		<td width="80"  align="center">수정/삭제</td>
	</tr>
	
	<?
	$result=mysqli_query($db,$query);
   if(!$result) exit("쿼리에러:$query");

   $count=mysqli_num_rows($result);

	$page=$_REQUEST[page];

   if(!$page) $page=1;
   $pages = ceil($count/$page_line);
   $first = 1;
   if($count>0) $first=$page_line*($page-1);
   $page_last=$count-$first;
   if ($page_last>$page_line) $page_last=$page_line;
   if ($count>0) mysqli_data_seek($result,$first);


   for($i=0;$i<$page_last;$i++)
   {

      $row=mysqli_fetch_array($result);

		$j=$row[menu22];

	   $status=$a_status[$row[status22]];
	   //if ($row[status22]==1)  $status="판매중";
	   //else if ($row[status22]==2) $status="판매중지";
	   //else $status="품절";

	   if ($row[icon_new22]==1)  $icon_new="New";
	   else $icon_new="";

	   if ($row[icon_hit22]==1)  $icon_hit="Hit";
	   else $icon_hit="";

	   if ($row[icon_sale22]==1)  $icon_sale="Sale (".$row[discount22]."%)";
	   else $icon_sale="";


      number_format(1234);
  echo("<tr bgcolor='#F2F2F2' height='23'>	
		<td width='100'>&nbsp $a_menu[$j]</td>
		<td width='100'>&nbsp $row[code22]</td>
		<td width='280'>&nbsp $row[name22]</td>	
		<td width='70'  align='right'>$row[price22] &nbsp</td>	
		<td width='50'  align='center'>$status</td>	
		<td width='120' align='center'> $icon_new  $icon_hit  $icon_sale</td>	
		<td width='80'  align='center'>
			<a href='product_edit.php?no=$row[no22]&sel1=$sel1&sel2=$sel2&sel3=$sel3&
       sel4=$sel4&text1=$text1&page=$page'>수정</a>/
			<a href='product_delete.php?no=$row[no22]&sel1=$sel1&sel2=$sel2&sel3=$sel3&
       sel4=$sel4&text1=$text1&page=$page' onclick='javascript:return confirm(\"삭제할까요 ?\");'>삭제</a>
		</td>
	</tr>");
}

?>
</table>
<table width="800" border="0" cellpadding="0" cellspacing="0">
	<tr>
		<td height="30" class="cmfont" align="center">
<?
	$blocks=ceil($pages/$page_block);
	$block=ceil($page/$page_block);
	$page_s = $page_block * ($block-1);
	$page_e = $page_block * $block;
	if($blocks <= $block) $page_e = $pages;

	echo("<table width='400' border = '0'>
	<tr>
		<td height='20' align='center'>");

	if($block > 1)		// 이전 블록으로
	{
		$tmp=$page_s;
		echo("<a href='product.php?page= $tmp&text1=$text1'>
				<img src='images/i_prev.gif' align='absmiddle' border='0'>
			</a>&nbsp");
	}
	for($i=$page_s+1; $i<=$page_e; $i++)
	{
		if($page == $i)
			echo("<font color='#FC0504'><b>$i</b></font>&nbsp");
		else
			echo("<a href='product.php?page=$i&sel1=$sel1&sel2=$sel2&sel3=$sel3&
       sel4=$sel4&text1=$text1'>[$i]</a>&nbsp");
	}
	if($block < $blocks)
	{
		$tmp = $page_e+1;
		echo("&nbsp<a href='product.php?page=$tmp&sel1=$sel1&sel2=$sel2&sel3=$sel3&
       sel4=$sel4&text1=$text1'>
				<img src = 'images/i_next.gif' align='absmiddle' border='0'>
				</a>");
	}
	echo("	</td>
			</tr>
			</table>");
?>
	</tr>
</table>

</center>



</body>
</html>