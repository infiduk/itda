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
	<td><br><h3>인증받고 싶은 사항을 선택하세요</h3></td></tr>
</table>
<!-- 테이블 시작 -->

<form name="form2" method="post" action="confirmation.php">

<table class="table  table-bordered  table-sm  mymargin5" width="300" align="center">
    <tr class="mycolor2">
        <td><input type='radio' name='type' value='0' > 학력</td>
		<td>자신의 학력을 인증요청합니다.</td>
	</tr>
	<tr>
		<td><input type='radio' name='type' value='1' > 경력</td>
		<td>자신의 경력을 인증요청합니다.</td>
	</tr>
	<tr>
		<td><input type='radio' name='type' value='2' > 자격증</td>
		<td>자신의 자격증을 인증요청합니다.</td>
	</tr>
	<tr>
		<td><input type='radio' name='type' value='3' > 수상내역</td>
		<td>자신의 수상내역을 인증요청합니다.</td>
	</tr>
	<tr>
		<td><input type='radio' name='type' value='4' > 사회활동</td>
		<td>자신의 공모전/교내활동/대외활동/봉사활동을 인증요청합니다.</td>
	</tr>

</table>
<br>
<table  class="table" width="300" border="0" cellspacing="0" cellpadding="7">
	<tr> 
		<td align="center">
			<input class="btn btn-default" type="submit" value="선택"> &nbsp;&nbsp
			<input class="btn btn-default" type="button" value="이전화면" onClick="javascript:history.back();">
		</td>
	</tr>
</table>
</form>
<!-- 테이블 끝 -->
</div>
</div>
</div>
<br><br><br>
<?
include "footer.php";
?>
</html>
