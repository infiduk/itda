<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?
include "c_top.php";
include "common.php";
?>
		</div>
	</div>

<?
	$query = "select * from confirmation where company_no=$cookie_no;";
	$result=mysqli_query($db, $query);
	if(!$result) exit("ERROR : $query");
	$count=mysqli_num_rows($result);
?>

<div class="container">
<div class="col-md bottom">
<table class="table" height="50">
	<tr>
		<td><h3>요청 리스트</h3></td>
	</tr>
</table>
<!-- 테이블 시작 -->
	<table class="table  table-bordered  table-sm  mymargin5" width="300" align="center">
		<tr class="mycolor2" bgcolor='#F2F2F2'>
			<td width="5%" align="center"><b></b></td>
			<td width="15%" align="center"><b>요청자</b></td>
			<td width="15%" align="center"><b>요청</b></td>
			<td width="55%" align="center"><b>정보</b></td>
			<td width="10%" align="center"><b>인증 / 취소</b></td>
		</tr>
	<?
		for($i=1;$i<$count+1;$i++){
			
			$row=mysqli_fetch_array($result);
			$query = "select * from member where no=$row[member_no];";
			$result1=mysqli_query($db, $query);
			$row1=mysqli_fetch_array($result1);
			if(!$result1) exit("ERROR1 : $query");
			
			list($type,$a,$data)=explode("#",$row[information],3);
			if($type==0){$type="학력";}
			 else if($type==1){$type="경력";}
			 else if($type==2){$type="자격증";}
			 else if($type==3){$type="수상내역";}
			 else if($type==4){$type="사회 활동";}
			echo("
				<tr>
					<td align='center'><input type='checkbox' value='1'></td>
					<td align='center'>$row1[name]</td>
					<td align='center'>$type</td>
					<td>$data</td>
					<td align='center'><a href='send_transaction.php?no=$row[no]&user_no=$row[member_no]'>인증</a> / <a href='confirmation_delete.php?no=$row[no]'>취소</a></td>
				</tr>");
		}
	?>

	</table>
<!-- 테이블 끝 -->
</div>
</div>
</div>
<br><br><br>
<?
include "c_footer.php";
?>
</html>
