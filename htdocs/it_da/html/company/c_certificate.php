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
		<td><h3>자격증 요청</h3></td>
	</tr>
</table>
<!-- 테이블 시작 -->
	<table class="table  table-bordered  table-sm  mymargin5" width="300" align="center">
		<tr class="mycolor2" bgcolor='#F2F2F2'>
			<td width="10%" align="center"><b>요청자</b></td>
			<td width="15%" align="center"><b>요청</b></td>
			<td width="35%" align="center"><b>자격증명</b></td>
			<td width="15%" align="center"><b>취득일</b></td>
			<td width="10%" align="center"><b>상태</b></td>
			<td width="15%" align="center"><b>인증 / 취소</b></td>
		</tr>
	<?
		for($i=1;$i<$count+1;$i++){
			
			$row=mysqli_fetch_array($result);
			$query = "select * from member where no=$row[member_no];";
			$result1=mysqli_query($db, $query);
			$row1=mysqli_fetch_array($result1);
			if(!$result1) exit("ERROR1 : $query");
			
			list($type,$a,$b,$c,$d)=explode("#",$row[information]);
			if($type==2){
				echo("
					<tr>
						<td align='center'>$row1[name]</td>
						<td align='center'>$a</td>
						<td align='center'>$b</td>
						<td>$c</td>
						<td>$d</td>
						<td align='center'><a href='send_transaction.php?no=$row[no]&user_no=$row[member_no]&type=$type'>인증</a> / <a href='confirmation_delete.php?no=$row[no]&type=$type'>취소</a></td>
					</tr>"); $x=1;
			}
			else if($i==$count&&$x!=1) {
				echo("
						<tr>
							<td align='center' colspan='6'><br><h2>요청 내역이 없습니다.</h2><br>
							<button class='btn btn-default' onClick='javascript:history.back();'><font color='#ff8400'><b>이전 화면으로</b></font></button><br><br></td>
						</tr>");
			}
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
