<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?
include "./c_top.php";
include "./common.php";
?>
<?
	$query = "select * from confirmation where company_no=$cookie_no;";

	$result=mysqli_query($db, $query);
	if(!$result) exit("ERROR : $query");

	$count=mysqli_num_rows($result);
?>
			<div class="wthree_banner_info">
			<? if($count==0){?>
				<center>
					<table height="200">
						<tr><td align="center" colspan="3"><h1><b>인증 가능한 요청이 없습니다.</b></h1></td></tr>
						<tr height="30"><td colspan="3"><br><br></td></tr>
						<tr height="150"><td></td></tr>
					</table>
				</center>
			<? }else{?>
				<center>
					<table height="200">
						<tr><td align="center" colspan="3"><font color="#ffffff"><h1><b>인증이 미완료된 요청이 있습니다.</b></h1></font></td></tr>
						<tr height="30"><td colspan="3"><br><br></td></tr>
						<tr align="center">
							<td width="20%"></td>
							<td width="60%"><font color="#ffd800"><h1><b>미인증 요청 : <?=$count?></b></h1></font><br></td>
							<td></td>
						</tr>
						<tr align="center">
							<td width="20%"></td>
							<td width="60%"><a href="./confirmation_list.php"><font color="#ff8400">확인하러 가기</font></a></td>
							<td></td>
						</tr>
						<tr height="200"><td></td></tr>
					</table>
				</center>
			<? } ?>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom-agileits">
		<div class="container">
			<a href = "../p_certificate.php">
			<div class="col-md-3 bottom1">
				<div class="bottom-agileinfo">
	<?			if(!$cookie_no) { echo("<a href='../p_login.php'>"); }
					else { echo("<a href='./c_certificate.php'>"); }    ?>
					<h3>자격증</h3>
					<p><br>자격 승인<br><br></p>	
					<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
				</div>
			</div>
			</a>
			<a href = "p_career.php">
			<div class="col-md-3 bottom2">
				<div class="bottom-w3-agileits">
	<?			if(!$cookie_no) { echo("<a href='p_login.php'>"); }
					else { echo("<a href='./c_career.php'>"); }    ?>
					<h3>경력</h3>
					<p><br>경력 승인<br><br></p>		
					<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
				</div>
			</div>
			</a>
			<a href = "p_awards.php">
			<div class="col-md-3 bottom3">
				<div class="bottom-agile">
	<?			if(!$cookie_no) { echo("<a href='p_login.php'>"); }
					else { echo("<a href='c_awards.php'>"); }    ?>
					<h3>수상경력</h3>
					<p><br>수상경력 승인 <br><br></p>		
					<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
				</div>
			</div>
			</a>
			<a href = "p_project.php">
			<div class="col-md-3 bottom4">
				<div class="bottom-w3-agile">
	<?			if(!$cookie_no) { echo("<a href='p_login.php'>"); }
					else { echo("<a href='c_activity.php'>"); }    ?>
					<h3>사회활동</h3>
					<p><br>사회활동 승인<br><br></p>				
					<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
				</div>
			</div>
			</a>
			<div class="clearfix"></div>
		</div>
	</div>
<!-- //banner-bottom -->
<!-- content -->
<div class="process all_pad agileits">
	<div class="container">
		<div class="process_grids wow fadeIn animated animated" data-wow-delay="0.1s" data-wow-duration="0s">
			<div class="col-md-5 process_left">
				<div class="port-2 effect-1">
                	<div class="image-box">
                    	<img class="img-responsive" src="../images/3.jpg" alt="Image-1">
                    </div>
                    <div class="text-desc">
                    	<h4>Coalition</h4>
                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                    </div>
                </div>
			</div>
			<div class="col-md-7 process_right">
				<h2>자신의 이력이 인증되는 과정</h2>
				<p>기존에 이력서를 자신이 기억하여 써야하는 프로그램이었다면 수상, 경력, 자격증등과 같은 기본적인 이력들은
				그 기관에서 이수가 끝나거나 수상시 자체적으로 인증해주어 자동적으로 자신의 이력서에 들어오게 됨</p>
				<div class="pro_grids">	
					<div class="col-md-3 pro_left pro_spa text-center">
						<h5>1</h5>
						<h6>프로젝트진행</h6>
					</div>
					<div class="col-md-3 pro_left pro_spa text-center">
						<h5>2</h5>
						<h6>회사에서 인증</h6>
					</div>
					<div class="col-md-3 pro_left text-center">
						<h5>3</h5>
						<h6>이력서에 첨부</h6>
					</div>
					<div class="clearfix"></div>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
	</div>
</div>	
<!-- //process -->
<!-- map -->
	<div class="w3l-map">
		<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3159.7563330782723!2d127.05263621572837!3d37.631419079785786!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x357cbbe5f3843891%3A0x2a334389e7cd7a44!2z7J24642V64yA7ZWZ6rWQ!5e0!3m2!1sko!2skr!4v1535515090870" allowfullscreen></iframe>
	</div>
<!-- map -->
<?
include "c_footer.php";
?>