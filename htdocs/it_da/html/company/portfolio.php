<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?
include "common.php";
include "c_top.php";
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

	if($row1[tel]){
			$tel1=trim(substr($row1[tel],0,3));
			$tel2=trim(substr($row1[tel],3,4));  
			$tel3=trim(substr($row1[tel],7,4)); 
			$tel = $tel1 . " - " . $tel2 . " - " . $tel3;
	}else{ $tel="미등록"; }
	if($row1[address]){	$address=$row1[address]; }
	 else{ $address="미등록"; }
	if($row1[image]){ $image="../img/".$row1[image]; }
	 else{ $image="../img/man.png"; }
?>

<div class="container">
	<div class="col-md bottom">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<!-- <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css"/> -->
		<link rel="stylesheet" href="../css6/fontawesome-all.min.css">
		<link rel="stylesheet" href="../css6/base.css">
	  </head>
	  <body>
	  <br>
		<div id="resume-framework">
		  <div id="base-info-wrapper">
			<div id="base-info">
				<img id="avatar" alt="avatar" src="<?=$image?>">
			  <div id="base-info-span">
				<div class="col-md-11">
					<b id="name"><?=$row[name]?></b>
						<h4 align="right">
							<a href="./portfolio_detail.php"><i class="fas fa-plus"></i>&nbsp; 수정</a>
							<?/*띄어쓰기를 없애고 싶다ㅠㅠㅠㅠㅠㅠㅠㅠㅠ*/?>
						</h4>
					<hr>		
				<h4>
					<table class="table  table-bordered  table-sm  mymargin5" border="1" width="100">
						<tr>
							<td width="20%" bgcolor='#F2F2F2'>전화 번호</td>
							<td colspan='3'><i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;<?=$tel; ?></td>
						</tr>
						<tr>
							<td width="20%" bgcolor='#F2F2F2'>주소</td>
							<td colspan='3'><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;<?=$address; ?></td>
						</tr>
						<tr>
							<td width="20%" bgcolor='#F2F2F2'>한마디</td>
							<td colspan='3'><?=$row1[memo]; ?></td>
						</tr>
					</table>
				</h4></div>

			  </div> <!-- end base-info-span -->
			</div> <!-- end base-info -->
		  </div> <!-- base-info-wrapper -->
  </body>
</html>
