<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?
include "common.php";
include "p_top.php";
?>
		</div>
	</div>
<?
	$query="select * from member where no=$cookie_no";
	$result=mysqli_query($db, $query);
	if(!$result) exit ("에러 : $query");
	$row=mysqli_fetch_array($result);
	if ($row[gender]==0) $gender="남성"; else $gender="여성";

	$query="select * from m_detail where m_no=$cookie_no";
	$result1=mysqli_query($db, $query);
	if(!$result) exit ("에러 : $query");
	$row1=mysqli_fetch_array($result1);

	$tel1=trim(substr($row1[tel],0,3));
	$tel2=trim(substr($row1[tel],3,4));  
	$tel3=trim(substr($row1[tel],7,4));
?>
<body>
<br><br>
<center><h1><font color="#999999"><b>개인정보 수정</b></font></h1></center>
<form name="form1" method="post" action="portfolio_edit.php"  enctype="multipart/form-data">
<div class="container">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<!-- <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css"/> -->
		<link rel="stylesheet" href="css6/fontawesome-all.min.css">
		<link rel="stylesheet" href="css6/base.css">

	  <br>
		<div id="resume-framework">
		  <div id="base-info-wrapper">
			<div id="base-info">
				<img id="avatar" alt="avatar" src="img/man.PNG"/>
			  <div id="base-info-span">
				<div class="col-md-11">
					<b id="name"><?=$row[name]?></b>
					<hr>
	<?/*				<span>
					  <h4> <?=$gender?> &nbsp; / &nbsp; <?=$row[birthday]?></h4>
					  <br>
					  <h4><i class="fas fa-phone"></i> 전화번호가 없어요...</h4>
					</span>  
	*/?>				
				<h4>
					<table class="table  table-bordered  table-sm  mymargin5" border="1">
						<tr class="mycolor2">
							<td width="20%" bgcolor='#F2F2F2'>성별</td>
							<td width="30%"><?=$gender?></td>
							<td width="20%" bgcolor='#F2F2F2'>생년월일</td>
							<td><?=$row[birthday]?></td>
						</tr>
						<tr>
							<td width="20%" bgcolor='#F2F2F2'>전화 번호</td>
							<td colspan='3'><i class="fas fa-phone"></i>&nbsp;&nbsp;
								<input type="text" name="tel1" value="<?=$tel1?>"   size="3" maxlength="3"> -
								<input type="text" name="tel2" value="<?=$tel2?>"  size="4" maxlength="4"> -
								<input type="text" name="tel3" value="<?=$tel3?>" size="4" maxlength="4">
							</td>
						</tr>
						<tr>
							<td width="20%" bgcolor='#F2F2F2'>주소</td>
							<td colspan='3'><i class="fas fa-home"></i>&nbsp;&nbsp;
								<input type="text" name="address" value="<?=$row1[address]?>"  size="40" maxlength="100">
							</td>
						</tr>
						<tr>
							<td width="20%" bgcolor='#F2F2F2'>사진</td>
							
								<? if($row1[image]){
										echo("<td colspan='2'><br>
													<input type='file' name='image' size='20' value='찾아보기'>
													<input type='hidden' name='imagename' value='$row1[image]'><br>");
										echo("현재 등록된 이미지 : ".$row1[image]);
										echo("&nbsp;&nbsp;&nbsp;<input type='checkbox' name='img_del' value='삭제' onClick='return confirm(\"삭제할까요?\");'>");
										echo("<h6><br>&nbsp;&nbsp;※ 기존 이미지 삭제를 원하시면 체크를 해주세요.<h6>");
										echo("</td><td>");
										echo("<img name='view' src='./img/$row1[image]' width='125' height='150' border='1'>");
									} else{
										echo("<td colspan='3'>
													<input type='file' name='image' size='20' value='찾아보기'>");
									}
									?>
							</td>
							
						</tr>
					</table>
				</h4></div>

			   </div> <!-- end base-info-span -->
			</div> <!-- end base-info -->
		</div> <!-- base-info-wrapper -->
		<p align="center">
			<button class="btn btn-default btn-lg" onClick="javascript:history.back();">취소</button>
			&nbsp;&nbsp;
			<button class="btn btn-default btn-lg" type="submit">저장</button></td>
		</p>
	 </div>
  </div>
 </form>
</body>
</html>