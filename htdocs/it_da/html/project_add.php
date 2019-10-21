<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?
include "p_top.php";
?>
		</div>
	</div>
<div class="container">
<div class="col-md bottom">
<table class="table" bgcolor="#DDDDDD" height="50">
	<tr>
	<td><h3>포트폴리오</h3></td>
	</tr>
	<tr>
	<td align="center"><h4>아래 항목을 작성해주세요.</h4></td>
	</tr>
	<tr>
	<td align="right"><h5><a href="project_add.php"> 추가하기</a></h5></td>
	</tr>
</table>
<!-- 테이블 시작 -->
<table class="table  table-bordered  table-sm  mymargin5" height="450">
    <tr>
	
			
			<? 
				if($row1[image]){
					echo("<td colspan='2' width='120' rowspan='6' style='padding:0' align='center' valign='middle'><br>
								<input type='file' name='image' size='20' value='찾아보기'>
								<input type='hidden' name='imagename' value='$row1[image]'><br>");
					echo("현재 등록된 이미지 : ".$row1[image]);
					echo("&nbsp;&nbsp;&nbsp;<input type='checkbox' name='img_del' value='삭제' onClick='return confirm(\"삭제할까요?\");'>");
					echo("<h6><br>&nbsp;&nbsp;※ 기존 이미지 삭제를 원하시면 체크를 해주세요.<h6>");
					echo("</td><td>");
					echo("<img name='view' src='./img/$row1[image]' width='125' height='150' border='1'>");
				}
				else{
					echo("<td colspan='3' width='120' rowspan='6' style='padding:0' align='center' valign='middle'>
								<input type='file' name='image' size='20' value='찾아보기'>");
				}
			?>

</td>

			<td width='60' bgcolor='#ffeeb5'>제목</td>
			<td width='480' align='left' colspan='3'><input type="text" name="title" value="" size="20"></td>
			<td width='40' bgcolor='#ffeeb5' rowspan='6'>
				<a href='myproject_delete.php?no=2209' onClick='javascript:return confirm("삭제할까요?");' class='cmfont2' ><font color=blue>&nbsp;DEL&nbsp;</font></a>
			</td>
		</tr>
		<tr>
			<td width='60' bgcolor='#ffeeb5'>담당</td>
			<td width='250'><input type="text" name="date" value="" size="10"></td>
			<td width='60' bgcolor='#ffeeb5'>기간</td>
			<td width='170' align="center"><input type="text" name="date" value="" size="10"><br>-<br><input type="text" name="date2" value="" size="10"></td>
		</tr>
		<tr>
			<td width='60' bgcolor='#ffeeb5'>OS</td>
			<td width='250'><input type="text" name="os" value="" size="10"></td>
			<td width='60' bgcolor='#ffeeb5'>DBMS</td>
			<td width='170'><input type="text" name="dbms" value="" size="10"></td>
		</tr>
		<tr>
			<td width='60' bgcolor='#ffeeb5'>TOOL</td>
			<td width='480' align='left' colspan='3'><input type="text" name="tool" value="" size="10"></td>
		</tr>
		<tr>
			<td width='60' bgcolor='#ffeeb5'>목적</td>
			<td width='480' align='left' colspan='3'><input type="text" name="purpose" value="" size="30"></td>
		</tr>
		<tr>
			<td width='60' bgcolor='#ffeeb5'>설명</td>
			<td width='480' align='left' colspan='3'><input type="text" name="explain" value="" size="30">
</td>
		</tr>
</table>
<!-- 테이블 끝 -->
</div>
</div>
</div>
<br><br><br>
<?
include "footer.php";
?>
</html>
