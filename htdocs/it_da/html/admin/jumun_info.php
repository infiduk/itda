<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2017.12)                                                    -->
<!-------------------------------------------------------------------------------------------->	
<?
include "common.php";
$no=$_REQUEST[no];
$query="select * from jumun where no22='$no';";
$result=mysqli_query($db,$query); 
if (!$result) exit("에러:$query");
$row=mysqli_fetch_array($result);
$o_tel1=trim(substr($row[o_tel22],0,3));        // 0번 위치에서 3자리 문자열 추출
$o_tel2=trim(substr($row[o_tel22],3,4));        // 3번 위치에서 4자리
$o_tel3=trim(substr($row[o_tel22],7,4));        // 7번 위치에서 4자리
$o_tel22 = $o_tel1 . "-" . $o_tel2 . "-" . $o_tel3;    
$o_phone1=trim(substr($row[o_phone22],0,3));        // 0번 위치에서 3자리 문자열 추출
$o_phone2=trim(substr($row[o_phone22],3,4));        // 3번 위치에서 4자리
$o_phone3=trim(substr($row[o_phone22],7,4));        // 7번 위치에서 4자리
$o_phone22 = $o_phone1 . "-" . $o_phone2 . "-" . $o_phone3;    
$r_tel1=trim(substr($row[r_tel22],0,3));        // 0번 위치에서 3자리 문자열 추출
$r_tel2=trim(substr($row[r_tel22],3,4));        // 3번 위치에서 4자리
$r_tel3=trim(substr($row[r_tel22],7,4));        // 7번 위치에서 4자리
$r_tel22 = $r_tel1 . "-" . $r_tel2 . "-" . $r_tel3;    
$r_phone1=trim(substr($row[r_phone22],0,3));        // 0번 위치에서 3자리 문자열 추출
$r_phone2=trim(substr($row[r_phone22],3,4));        // 3번 위치에서 4자리
$r_phone3=trim(substr($row[r_phone22],7,4));        // 7번 위치에서 4자리
$r_phone22 = $r_phone1 . "-" . $r_phone2 . "-" . $r_phone3;    
if($row[pay_method22]) $pay_method = "무통장";
else $pay_method = "카드";
if(!$row[card_halbu22]) $card_halbu = "일시불";
else $card_halbu = $row[card_halbu22]."개월";
if($row[card_kind22]==1) $card_kind = "국민";
if($row[card_kind22]==2) $card_kind = "신한";
if($row[card_kind22]==3) $card_kind = "우리";
if($row[card_kind22]==4) $card_kind = "하나";
if($row[bank_kind22]==1) $bank_kind = "국민: 000-00000-0000";
if($row[bank_kind22]==2) $bank_kind = "신한: 000-00000-0000";
$total=$row[total_cash22];
?>
<html>
<head>
<title>쇼핑몰 홈페이지</title>
<meta http-equiv="content-type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="include/font.css">
<script language="JavaScript" src="include/common.js"></script>
</head>

<body style="margin:0">

<center>

<br>
<script> document.write(menu());</script>
<br>
<br>

<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문번호</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">&nbsp;<font size="3"><b><?=$row[no22]?> (<font color="blue">주문신청</font>)</b></font></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문일</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[jumunday22]?></td>
	</tr>
</table>
<br>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE">
		<?
		echo("$row[o_name22]");
		if($row[member_no22]==0) echo(" (비회원)");
		?> </td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자전화</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$o_tel22?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자 E-Mail</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[o_email22]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자핸드폰</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$o_phone22?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">주문자주소</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE" colspan="3">(<?=$row[o_zip22]?>) <?=$row[o_juso22]?></td>
	</tr>
	</tr>
</table>
<img src="blank.gif" width="10" height="5"><br>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[r_name22]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자전화</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$r_tel22?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자 E-Mail</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[r_email22]?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자핸드폰</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$r_phone22?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">수신자주소</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE" colspan="3">(<?=$row[r_zip22]?>) <?=$row[r_juso22]?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">메모</font></td>
        <td width="300" height="50" bgcolor="#EEEEEE" colspan="3"><?=$row[memo22]?></td>
	</tr>
</table>
<br>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">지불종류</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$pay_method?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">카드승인번호 </font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$row[memo22]?>&nbsp</td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">카드 할부</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$card_halbu?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">카드종류</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$card_kind?></td>
	</tr>
	<tr> 
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">무통장</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$bank_kind?></td>
        <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">입금자이름</font></td>
        <td width="300" height="20" bgcolor="#EEEEEE"><?=$bank_sender?></td>
	</tr>
</table>
<br>

<?
$query="select product.name22 as product_name, opts1.name22 as opts1_name, opts2.name22 as opts2_name, jumuns.num22, jumuns.price22, jumuns.cash22, jumuns.discount22 
from ((jumuns left join product on jumuns.product_no22=product.no22)
           left join opts as opts1 on jumuns.opts1_no22=opts1.no22)
           left join opts as opts2 on jumuns.opts2_no22=opts2.no22
 where jumuns.jumun_no22='$no';";

$result=mysqli_query($db,$query); 
if (!$result) exit("에러:$query");
$count=mysqli_num_rows($result);    // 레코드개수
?>

<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr bgcolor="#CCCCCC"> 
    <td width="340" height="20" align="center"><font color="#142712">상품명</font></td>
		<td width="50"  height="20" align="center"><font color="#142712">수량</font></td>
		<td width="70"  height="20" align="center"><font color="#142712">단가</font></td>
		<td width="70"  height="20" align="center"><font color="#142712">금액</font></td>
		<td width="50"  height="20" align="center"><font color="#142712">할인</font></td>
		<td width="60"  height="20" align="center"><font color="#142712">옵션1</font></td>
		<td width="60"  height="20" align="center"><font color="#142712">옵션2</font></td>
	</tr>
	<?
	for($i=0; $i<$count; $i++){
		$row=mysqli_fetch_array($result);
		if(!$row[product_name]){$row[product_name]="택배비";}
		if(!$row[discount22]){$discount="";}
		else {$discount=$row[discount22]."%";}
		echo("<tr bgcolor='#EEEEEE' height='20'>	
		<td width='340' height='20' align='left'>$row[product_name]</td>	
		<td width='50'  height='20' align='center'>$row[num22]</td>	
		<td width='70'  height='20' align='right'>$row[price22]</td>	
		<td width='70'  height='20' align='right'>$row[cash22]</td>	
		<td width='50'  height='20' align='center'>$discount</td>	
		<td width='60'  height='20' align='center'>$row[opts1_name]</td>	
		<td width='60'  height='20' align='center'>$row[opts2_name]</td>	
		</tr>");
	}
	?>
</table>
<img src="blank.gif" width="10" height="5"><br>
<table width="800" border="1" cellpadding="2" style="border-collapse:collapse">
	<tr> 
	  <td width="100" height="20" bgcolor="#CCCCCC" align="center"><font color="#142712">총금액</font></td>
		<td width="700" height="20" bgcolor="#EEEEEE" align="right"><font color="#142712" size="3"><b><?=$total?></b></font> 원&nbsp;&nbsp</td>
	</tr>
</table>

<table width="800" border="0" cellspacing="0" cellpadding="7">
	<tr> 
		<td align="center">
			<input type="button" value="이 전 화 면" onClick="javascript:history.back();">&nbsp
			<input type="button" value="프린트" onClick="javascript:print();">
		</td>
	</tr>
</table>

</center>

<br>
</body>
</html>
