<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?
include "p_top.php";
?>

<div class="container">
<div class="col-md bottom">
<table class="table" bgcolor="#DDDDDD" height="50">
	<tr>
	<td><h3>포트폴리오</h3></td>
	<td align="right"><h5><a href="project_add.php"> 추가하기</a></h5></td></tr>
</table>
<!-- 테이블 시작 -->
<table class="table  table-bordered  table-sm  mymargin5" height="450">
    <tr>
			<td width='120' rowspan='6' style='padding:0' align="center" valign="middle"><img src='img/IFP창업대전(박유진).jpg' width='250' border='0' vspace='0' hspace='0'></td>
			<td width='60' bgcolor='#ffeeb5'>제목</td>
			<td width='480' align='left' colspan='3'>escape from the Zombie</td>
			<td width='40' bgcolor='#ffeeb5' rowspan='6'>
				<a href='myproject_delete.php?no=2209' onClick='javascript:return confirm("삭제할까요?");' class='cmfont2' ><font color=blue>&nbsp;DEL&nbsp;</font></a>
			</td>
		</tr>
		<tr>
			<td width='60' bgcolor='#ffeeb5'>담당</td>
			<td width='250'>개인 프로젝트</td>
			<td width='60' bgcolor='#ffeeb5'>기간</td>
			<td width='170'>2018.08.01~2018.10.03</td>
		</tr>
		<tr>
			<td width='60' bgcolor='#ffeeb5'>OS</td>
			<td width='250'>unity 프로그램</td>
			<td width='60' bgcolor='#ffeeb5'>DBMS</td>
			<td width='170'></td>
		</tr>
		<tr>
			<td width='60' bgcolor='#ffeeb5'>TOOL</td>
			<td width='480' align='left' colspan='3'>c#</td>
		</tr>
		<tr>
			<td width='60' bgcolor='#ffeeb5'>목적</td>
			<td width='480' align='left' colspan='3'>창업대전 출품을 위해 간단하지만 시각적으로 화려한 RPG게임을 만들어본다</td>
		</tr>
		<tr>
			<td width='60' bgcolor='#ffeeb5'>설명</td>
			<td width='480' align='left' colspan='3'>- 마우스에 따라 머리방향이 움직이고 키보드에 따라 앞뒤로 이동<br />
- 어떠한  보이지 않는 Trigger에 부딧히면 다음 할 일을 화면에 불투명한 글씨를 띄우거나 문이 열리며 좀비가 출현<br />
- 아이템을 가지고 좀비를 죽임<br />
- 좀비가  게임사용자를 따라 움직이고 공격<br />
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
