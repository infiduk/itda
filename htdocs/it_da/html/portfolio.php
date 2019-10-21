<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->

<?
include "common.php";
include "p_top.php";

	$str_data = $_REQUEST[str_data];
	$a_row = explode("**",$str_data);
	$c_row = count($a_row); // 데이터 수
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
	if($row1[image]){ $image="./img/".$row1[image]; }
	 else{ $image="./img/man.png"; }
?>

<div class="container">
	<div class="col-md bottom">
		<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
		<!-- <link rel="stylesheet" type="text/css" href="css/fontawesome-all.min.css"/> -->
		<link rel="stylesheet" href="css6/fontawesome-all.min.css">
		<link rel="stylesheet" href="css6/base.css">
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
	<?/*				<span>
					  <h4> <?=$gender?> &nbsp; / &nbsp; <?=$row[birthday]?></h4>
					  <br>
					  <h4><i class="fas fa-phone"></i> 전화번호가 없어요...</h4>
					</span>  
	*/?>				
				<h4>
					<table class="table  table-bordered  table-sm  mymargin5" border="1" width="100">
						<tr class="mycolor2">
							<td width="20%" bgcolor='#F2F2F2'>성별</td>
							<td width="30%"><?=$gender?></td>
							<td width="20%" bgcolor='#F2F2F2'>생년월일</td>
							<td><?=$row[birthday]?></td>
						</tr>
						<tr>
							<td width="20%" bgcolor='#F2F2F2'>전화 번호</td>
							<td colspan='3'><i class="fas fa-phone"></i>&nbsp;&nbsp;&nbsp;<?=$tel; ?></td>
						</tr>
						<tr>
							<td width="20%" bgcolor='#F2F2F2'>주소</td>
							<td colspan='3'><i class="fas fa-home"></i>&nbsp;&nbsp;&nbsp;<?=$address; ?></td>
						</tr>
					</table>
				</h4></div>


			  </div> <!-- end base-info-span -->
			</div> <!-- end base-info -->
		  </div> <!-- base-info-wrapper -->

		  <div style="clear: both;"></div>

		  <div id="summary">
			<div class="banner-div">
			  <span class="banner-span">
				  <i class="white-icon fas fa-user"></i>&nbsp;학력
			  </span>
			</div> <!-- end banner-div -->
<!-- 테이블 시작 -->
<table class="table  table-bordered  table-sm  mymargin5" width="300" align="center">
    <tr class="mycolor2" bgcolor='#F2F2F2'>
        <td width="25%" align="center"><b>학교명</b></td>
        <td width="25%" align="center"><b>학과명</b></td>
        <td width="25%" align="center"><b>날짜</b></td>
		<td width="25%" align="center"><b>상태</b></td>
    </tr>
    <tr>
<?
				for($i=0; $i<$c_row; $i++) {
					$a_col = explode("#",$a_row[$i]);
					
					if($a_col[0]==0) {
						echo("<tr>");
						for($j=1; $j<5; $j++) {
							echo("<td>$a_col[$j]</td>");
						}
						echo("</tr>");
					}
				}
?>
    </tr>
</table>
<!-- 테이블 끝 -->
		  </div> <!-- end summary -->


		  <div id="summary">
			<div class="banner-div">
			  <span class="banner-span">
				  <i class="white-icon fas fa-user"></i>&nbsp;경력
			  </span>
			</div> <!-- end banner-div -->
<!-- 테이블 시작 -->
<table class="table  table-bordered  table-sm  mymargin5" width="300" align="center">
    <tr class="mycolor2" bgcolor='#F2F2F2'>
        <td width="20%" align="center"><b>회사명</b></td>
        <td width="20%" align="center"><b>부서명</b></td>
        <td width="20%" align="center"><b>직급</b></td>
		<td width="20%" align="center"><b>업무 내용</b></td>
		<td width="20%" align="center"><b>근무 기간</b></td>
    </tr>
    <tr>
<?
				for($i=0; $i<$c_row; $i++) {
					$a_col = explode("#",$a_row[$i]);
					
					if($a_col[0]==1) {
						echo("<tr>");
						for($j=1; $j<6; $j++) {
							if($j==5) {
								$k=$j+1;
								echo("<td>$a_col[$j] ~ $a_col[$k]</td>");
							}
							else
								echo("<td>$a_col[$j]</td>");
							
						}
						echo("</tr>");
					}
				}
?>
    </tr>
</table>
<!-- 테이블 끝 -->
		  </div> <!-- end summary -->

		  <div id="skills">
			<div class="banner-div">
			  <span class="banner-span">
				<i class="white-icon fas fa-pencil-alt"></i>&nbsp;자격증
			  </span>
			</div> <!-- end skills -->
<!-- 테이블 시작 -->
<table class="table  table-bordered  table-sm  mymargin5" width="300" align="center">
    <tr class="mycolor2" bgcolor='#F2F2F2'>
        <td width="25%" align="center"><b>발급기관</b></td>
        <td width="25%" align="center"><b>자격증명</b></td>
        <td width="25%" align="center"><b>취득일</b></td>
        <td width="25%" align="center"><b>상태</b></td>
    </tr>
    <tr>
<?
			for($i=0; $i<$c_row; $i++) {
				$a_col = explode("#",$a_row[$i]);
				
				if($a_col[0]==2) {
					echo("<tr>");
					for($j=1; $j<5; $j++) {
						echo("<td>$a_col[$j]</td>");
					}
					echo("</tr>");
				}
			}
?>
    </tr>
</table>
<!-- 테이블 끝 -->
		  </div> <!-- end skills -->

		  <div id="jobs">
			<div class="banner-div">
			  <span class="banner-span">
				<i class="white-icon fas fa-briefcase"></i>&nbsp;프로젝트
			  </span>
			</div>
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
		  </div> <!-- end jobs -->

		  <div id="education">
			<div class="banner-div">
			  <span class="banner-span"><i class="white-icon fas fa-graduation-cap"></i>&nbsp;수상경력</span>
			</div>
<table class="table  table-bordered  table-sm  mymargin5" width="300" align="center">
    <tr class="mycolor2" bgcolor='#F2F2F2'>
        <td width="25%" align="center"><b>수상 기관</b></td>
		<td width="25%" align="center"><b>수상 명</b></td>
        <td width="25%" align="center"><b>수상 내용</b></td>
        <td width="25%" align="center"><b>수상 날짜</b></td>
    </tr>

	<tr>
<?
			for($i=0; $i<$c_row; $i++) {
				$a_col = explode("#",$a_row[$i]);
				
				if($a_col[0]==3) {
					echo("<tr>");
					for($j=1; $j<5; $j++) {
						echo("<td>$a_col[$j]</td>");
					}
					echo("</tr>");
				}
			}
?>
    </tr>
</table>
		  </div> <!-- end education -->

			<div class="banner-div">
			  <span class="banner-span">&nbsp;자기소개서</span>
			</div>
<table class="table  table-bordered  table-sm  mymargin5" width="300" align="center">
    <tr class="mycolor2" bgcolor='#F2F2F2'>
        <td width="100%" >
		 <textarea name="memo" cols ="150" rows="100">Q. 자신의 기술력과 열정을 보여줄 수 있는 활동사항을 기재해 주세요




- 일정서비스

1) 진행기간 : 2016.12 ~ 2017.02 

2) 주요내용 : 일정서비스인 '나의 일정'으로 기록하고 관리, 공유하는 웹서비스를 구축. 

3) 본인이 공헌한 점 : Spring Framework을 기반으로한 서버개발 

4) 사용한 Skill 또는 지식 : Spring Boot, MySQL, MyBatis, JSP, Jquery, JUnit, Jenkins 

5) 결과/성과 : 개발 프로세스 경험, Java기반의 웹환경으로 제작. 


- 2016 에너지 해커톤 

1) 진행기간 : 2016.08

2) 주요내용 : 물 사용량을 미리 확인해서 계획적으로 사용을 할 수 있는 에너지 절약 APP을 제작 

3) 본인이 공헌한 점 : APP개발 

4) 사용한 Skill 또는 지식 : Google TTS, Newtone API, EnerTalk API, Android 

5) 결과/성과 : 대상 수상 



- Microsoft ImagineCup 출전 (Data Driven System 개발) 

1) 진행기간 : 2014.2 ~ 2014.04 

2) 주요내용 : Data driven system을 이용한 게임 플랫폼 제작 

3) 본인이 공헌한 점 : 플랫폼 제작 

4) 사용한 Skill 또는 지식 : Data Driven System, XML, C#, XNA 4.0 

5) 결과/성과 : oo대 2014 학술대회 최우수 수상 


-Cocos2d-x를 이용한 교육 APP개발 

1) 진행기간 : 2014.12 ~ 2015.03 

2) 주요내용 : Cocos2d-x를 이용한 초등교육 APP 제작 

3) 본인이 공헌한 점 : Cocos2d-x를 사용 함으로 Multi platform (IOS, Android) 개발 

4) 사용한 Skill 또는 지식 : Cocos2d-X, Android NDK 

5) 결과/성과 : oo대 2015 학술대회 우수 수상 


 


Q. 본인이 사용할 수 있는 언어와 사용 경험, 기간 등을 서술해 주세요.


 


* 사용가능언어: Java, C++, C#, HTML, SQL 

* 능숙한 언어: Java 


* Java 

사용기간: 3년 

사용경험 : OOO Technology Services 인턴, OOOO 인턴, 다수 프로젝트 사용 

사용 프로젝트: Android, Framework 


* C++ 

사용기간 : 2년 

사용 프로젝트: Cocos2d-x 


* SQL 

사용기간: 3년 

사용경험 : OOO Technology Services 인턴, OOOO 인턴, 다수 프로젝트 사용 

사용 프로젝트: MySQL, Oracle, SQLite 


*HTML 

사용기간: 2년 미만

 </textarea>
		</td>
    </tr>
</table>
		</div>
	</div>
  </body>
</html>
