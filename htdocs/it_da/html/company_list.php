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
	$query = "select * from member where gender = 2 order by name ;";
	$result=mysqli_query($db, $query);
	if(!$result) exit ("에러 : $query");
	$row=mysqli_fetch_array($result);
	$count=mysqli_num_rows($result);

	$query="select * from m_detail where m_no=$row[no]";
		$result1=mysqli_query($db, $query);
		if(!$result1) exit ("에러 : $query");
		
		if($count1==0){ $image="man.png";}
		else{ $image=$row1[image]; }
?>
<body>
<br><br>
<center><h1><font color="#999999"><b>잇다</b> 프로젝트의 참여 기업 목록</font></h1></center>
<hr>
<div class="container">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<!-- <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css"/> -->
		<link rel="stylesheet" href="css6/fontawesome-all.min.css">
		<link rel="stylesheet" href="css6/base.css">

	  <br>
	  <div id="base-info-span" >	
	  <center>
<?
	for($i = 0; $i < $count; $i++){
		$row=mysqli_fetch_array($result);
		$row1=mysqli_fetch_array($result1);
		$count1=mysqli_num_rows($result1);
?>
				<table width="700">
					<tr> 
						<td width="30%" align='center'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<img src="./img/<?=$image?>" width="100"></td>
						<td width="50%"><b><?=$row[name]?></b> </td>
						<td width="20%">
						<? if($count1==0){
								echo("<h5>
										<i class='fas fa-phone'></i>&nbsp;&nbsp;&nbsp;<font color='#DDDDDD'>미등록</font><br><br>
										<i class='fas fa-home'></i>&nbsp;&nbsp;&nbsp;<font color='#DDDDDD'>미등록</font>
										</h5>");
							} else {
								echo("<h5>
										<i class='fas fa-phone'></i>&nbsp;&nbsp;&nbsp;$row1[tel]<br><br>
										<i class='fas fa-home'></i>&nbsp;&nbsp;&nbsp;$row1[address]
										</h5>");
							} ?>
							
						</td>
					</tr>
				</table>
<? } ?>
</center>
	 </div> <!-- end base-info-span -->
  </div>
<br><br><br><br>
</body>
</html>
<?	/*						<table class="table  table-bordered  table-sm  mymargin5" border="1" width="100">
								<tr>
									<td width="30%" bgcolor='#F2F2F2' align="center">전화 번호</td>
									<td colspan='3'></td>
								</tr>
								<tr>
									<td width="30%" bgcolor='#F2F2F2'  align="center">주소</td>
									<td colspan='3'></td>
								</tr>
							</table>*/?>
<?
/*
				<table>
					<tr> 
						<td width="25%">&nbsp;<img src="img/man.PNG" width="100">&nbsp;</td>
						<td width="40%">&nbsp;&nbsp;&nbsp;<b><?=$row[name]?></b> </td>
						<td width="35%">
							<h5>
							<i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;<?=$tel; ?><br><br>
							<i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;<?=$address; ?>
							</h5>
						</td>
					</tr>
				</table>

				------

				<table border='1' cellspacing='10' cellpadding='10'>
					<tr width="40%"><td>&nbsp;<img src="img/man.PNG" width="100">&nbsp;</td></tr>
					<tr width="25%"><td>&nbsp;&nbsp;&nbsp;<b><?=$row[name]?></b> </td></tr>
					<tr width="35%"><td>
							<h5>
							<i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;<?=$tel; ?><br><br>
							<i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;<?=$address; ?>
							</h5>
						</td>
					</tr>
				</table>
*/
?>
<?
	include "./footer.php";
?>