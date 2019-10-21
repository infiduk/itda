<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?
	include "p_top.php";
	$type = $_REQUEST[type];
	$dateString = date("Y-m-d", time());
?>
		</div>
	</div>

<script>
	function find_company(){
		window.open("con_findcompany.php","", "width=500,height=500, resizable=no, scrollbars=no, status=no;");
	}
</script>

<div class="container">
<div class="col-md bottom">
<table class="table" bgcolor="#DDDDDD" height="50">
	<tr>
	<?
			if($type == 0) // 학력
				echo("<td><h3>학력 인증하기</h3></td>");
			if($type == 1) // 경력
				echo("<td><h3>경력 인증하기</h3></td>");
			if($type == 2) // 자격증
				echo("<td><h3>자격증 인증하기</h3></td>");
			if($type == 3) // 수상내역
				echo("<td><h3>수상내역 인증하기</h3></td>");
			if($type == 4) // 사회활동
				echo("<td><h3>공모전/교내활동/대외활동/봉사활동 인증하기</h3></td>");
	?>
	</tr><td>다음 사항을 작성해주세요.</td>
</table>
<!-- 테이블 시작 -->
<?
			if($type == 0){// 학력
?>
<form name="form2" method="post" action="confirmation_insert.php">
<input type="hidden" name="type" value="<?=$type?>">
<table class="table  table-bordered  table-sm  mymargin5" width="300" align="center">
    <tr class="mycolor2">
        <td> 학교명<BR></td>
		<td><input type="text" name="university" value="" size="30" disabled> &nbsp&nbsp
			  <input type="button" value="찾기" class="btn btn-default btn-sm" onClick="find_company();">
		</td><? // if(form_error("com_no")==true) echo form_error("com_no");?>
	</tr>
	<tr>
		<td>학과명</td>
		<td><input type="text" name="major" value="" size="30"></td>
	</tr>
	<tr>
		<td>날짜</td>
		<td><?=$dateString?></td>
	</tr>
	<tr>
		<td>상태</td>
		<td><input type='radio' name='state' value='0' > 재학&nbsp&nbsp
				<input type='radio' name='state' value='1' > 휴학&nbsp&nbsp
				<input type='radio' name='state' value='2' > 졸업예정&nbsp&nbsp
				<input type='radio' name='state' value='3' > 졸업&nbsp&nbsp
		</td>
	</tr>
</table>
<?}?>


<?
			if($type == 1){//경력
?>
<form name="form2" method="post" action="confirmation_insert.php">
<input type="hidden" name="type" value="<?=$type?>">
<table class="table  table-bordered  table-sm  mymargin5" width="300" align="center">
    <tr class="mycolor2">
        <td>회사명</td>
		<td><input type="text" name="company" value="" size="30"></td>
	</tr>
	<tr>
		<td>부서명</td>
		<td><input type="text" name="department" value="" size="30"></td>
	</tr>
	<tr>
		<td>직급</td>
		<td><input type="text" name="position" value="" size="30"></td>
	</tr>
	<tr>
		<td>업무 내용</td>
		<td><input type="text" name="task" value="" size="30"></td>
	</tr>
	<tr>
		<td>근무 기간</td>
		<td><select name = 'year' required="">
				<option value="">년</option>
			<?
					for($i=1982; $i<=2018; $i++) {
						echo("<option value='$i'>$i 년</option>");
					}
			?>
			</select>

			<select name= 'month' required="">
			   <option value="">월</option>
			   <?
				for($i=1; $i<=12; $i++) {
					echo("<option value='$i'>$i 월</option>");
				}
				?>
		   </select>

			<select name='day' required="">
				<option value="">일</option>
				<?
				for($i=01; $i<=31; $i++) {
					echo("<option value='$i'>$i 일</option>");
				}
				?>
			</select>
			- 
		<select name = 'year2' required="">
				<option value="">년</option>
			<?
					for($i=1982; $i<=2018; $i++) {
						echo("<option value='$i'>$i 년</option>");
					}
			?>
			</select>

			<select name= 'month2' required="">
			   <option value="">월</option>
			   <?
				for($i=1; $i<=12; $i++) {
					echo("<option value='$i'>$i 월</option>");
				}
				?>
		   </select>

			<select name='day2' required="">
				<option value="">일</option>
				<?
				for($i=01; $i<=31; $i++) {
					echo("<option value='$i'>$i 일</option>");
				}
				?>
			</select></td>
	</tr>
</table>
<?}?>
<?
			if($type == 2){//자격증
?>
<form name="form2" method="post" action="confirmation_insert.php">
<input type="hidden" name="type" value="<?=$type?>">
<table class="table  table-bordered  table-sm  mymargin5" width="300" align="center">
    <tr class="mycolor2">
        <td>자격증명</td>
		<td><input type="text" name="name" value="" size="30"></td>
	</tr>
	<tr>
		<td>발급기관</td>
		<td><input type="text" name="agency" value="" size="30"></td>
	</tr>
	<tr>
		<td>취득일</td>
		<td><select name = 'year' required="">
				<option value="">년</option>
			<?
					for($i=1982; $i<=2018; $i++) {
						echo("<option value='$i'>$i 년</option>");
					}
			?>
			</select>

			<select name= 'month' required="">
			   <option value="">월</option>
			   <?
				for($i=1; $i<=12; $i++) {
					echo("<option value='$i'>$i 월</option>");
				}
				?>
		   </select>

			<select name='day' required="">
				<option value="">일</option>
				<?
				for($i=01; $i<=31; $i++) {
					echo("<option value='$i'>$i 일</option>");
				}
				?>
			</select></td>
	</tr>
	<tr>
		<td>상태</td>
		<td><input type='radio' name='state' value='0' > 취득완료&nbsp&nbsp
			<!--<input type='radio' name='state' value='1' > 필기 합격&nbsp&nbsp-->
		</td>
	</tr>

</table>
<?}?>
<?
			if($type == 3){//수상내역
?>
<form name="form2" method="post" action="confirmation_insert.php">
<input type="hidden" name="type" value="<?=$type?>">
<table class="table  table-bordered  table-sm  mymargin5" width="300" align="center">
    <tr class="mycolor2">
        <td>수상 명</td>
		<td><input type="text" name="title" value="" size="30"></td>
	</tr>
	<tr>
		<td>내용</td>
		<td><input type="text" name="content" value="" size="30"></td>
	</tr>
	<tr>
		<td>수상 기관</td>
		<td><input type="text" name="agency" value="" size="30"></td>
	</tr>
	<tr>
		<td>수상 날짜</td>
		<td><select name = 'year' required="">
				<option value="">년</option>
			<?
					for($i=1982; $i<=2018; $i++) {
						echo("<option value='$i'>$i 년</option>");
					}
			?>
			</select>

			<select name= 'month' required="">
			   <option value="">월</option>
			   <?
				for($i=1; $i<=12; $i++) {
					echo("<option value='$i'>$i 월</option>");
				}
				?>
		   </select>

			<select name='day' required="">
				<option value="">일</option>
				<?
				for($i=01; $i<=31; $i++) {
					echo("<option value='$i'>$i 일</option>");
				}
				?>
			</select></td>
	</tr>
</table>
<?}?>
<?
			if($type == 4){//사회활동
?>
<form name="form2" method="post" action="confirmation_insert.php">
<input type="hidden" name="type" value="<?=$type?>">
<table class="table  table-bordered  table-sm  mymargin5" width="300" align="center">
    <tr class="mycolor2">
        <td>제목</td>
		<td><input type="text" name="title" value="" size="30"></td>
	</tr>
	<tr>
		<td>주최 기관</td>
		<td><input type="text" name="agency" value="" size="30"></td>
	</tr>
	<tr>
		<td>진행기간</td>
		<td>	
			<select name = 'year' required="">
				<option value="">년</option>
			<?
					for($i=1982; $i<=2018; $i++) {
						echo("<option value='$i'>$i 년</option>");
					}
			?>
			</select>

			<select name= 'month' required="">
			   <option value="">월</option>
			   <?
				for($i=1; $i<=12; $i++) {
					echo("<option value='$i'>$i 월</option>");
				}
				?>
		   </select>

			<select name='day' required="">
				<option value="">일</option>
				<?
				for($i=01; $i<=31; $i++) {
					echo("<option value='$i'>$i 일</option>");
				}
				?>
			</select>
			- 
		<select name = 'year2' required="">
				<option value="">년</option>
			<?
					for($i=1982; $i<=2018; $i++) {
						echo("<option value='$i'>$i 년</option>");
					}
			?>
			</select>

			<select name= 'month2' required="">
			   <option value="">월</option>
			   <?
				for($i=1; $i<=12; $i++) {
					echo("<option value='$i'>$i 월</option>");
				}
				?>
		   </select>

			<select name='day2' required="">
				<option value="">일</option>
				<?
				for($i=01; $i<=31; $i++) {
					echo("<option value='$i'>$i 일</option>");
				}
				?>
			</select></td>
	</tr>
</table>
<?}?>
<br>
<table width="300" border="0" cellspacing="0" cellpadding="7">
	<tr> 
		<td align="center">
			<input type="submit" value="요청하기"> &nbsp;&nbsp
			<input type="button" value="이전화면" onClick="javascript:history.back();">
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
