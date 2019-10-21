<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?
include "top.php";
?>
<?
	$cookie_no=$_COOKIE[cookie_no];
	$cookie_name=$_COOKIE[cookie_name];
?>
			<div class="wthree_banner_info">
<?
				if($cookie_no){
?><br>
				<section class="slider">
					<div class="flexslider">
					
						<ul class="slides">
							<li>
								<h3> 자격증 </h3>
								<p> 자신의 자격증을 볼 수 있습니다.</p>
								<div class="agileits_more">
									<ul>
										<li><a href="get_transaction.php" class="w3ls_banner_more hvr-icon-hang"> 보러가기</a></li>
										<li><a href="confirmation_select.php" class="hvr-icon-hang">인증요청</a></li>
									</ul>
								</div>
							</li>
							<li>
								<h3> 경력 </h3>
								<p> 자신의 경력을 볼 수 있습니다. </p>
								<div class="agileits_more">
									<ul>
										<li><a href="get_transaction.php" class="w3ls_banner_more hvr-icon-hang">보러가기</a></li>
										<li><a href="confirmation_select.php" class="hvr-icon-hang">인증요청</a></li>
									</ul>
								</div>
							</li>
							<li>
								<h3> 수상경력 </h3>
								<p> 자신의 수상경력을 볼 수 있습니다. </p>
								<div class="agileits_more">
									<ul>
										<li><a href="get_transaction.php" class="w3ls_banner_more hvr-icon-hang">보러가기</a></li>
										<li><a href="confirmation_select.php" class="hvr-icon-hang">인증요청</a></li>
									</ul>
								</div>
							</li>
							<li>
								<h3> 프로젝트 </h3>
								<p> 자신의 프로젝트를 볼 수 있습니다. </p>
								<div class="agileits_more">
									<ul>
										<li><a href="p_project.php" class="w3ls_banner_more hvr-icon-hang">보러가기</a></li>
									</ul>
								</div>
							</li>
							<!---<li>
								<h3> 은아쓰 </h3>
								<p> 유럽여행중..(부럽)</p>
								<div class="agileits_more">
									<ul>
										<li><a href="#" class="w3ls_banner_more hvr-icon-hang">보러가기</a></li>
										<li><a href="#" class="hvr-icon-hang" data-toggle="modal" data-target="#myModal">자세히 보기</a></li>
									</ul>
								</div>
							</li>--->
						</ul>
					</div>
				</section>
				<!-- flexSlider -->
					<script defer src="js/jquery.flexslider.js"></script>
					<script type="text/javascript">
					$(window).load(function(){
					  $('.flexslider').flexslider({
						animation: "slide",
						start: function(slider){
						  $('body').removeClass('loading');
						}
					  });
					});
				  </script>
<?			} else { ?>
				<center>
					<table height="200">
						<tr><td align="center" colspan="4"><h1><b>로그인이 필요한 서비스 입니다</b></h1></td></tr>
						<tr height="70"><td colspan="4"><br><br></td></tr>
						<tr align="center">
							<td width="15%"></td>
							<td width="30%"><font color="ffffff"><h4>로그인을 하시겠습니까?</h4></font><br></td>
							<td width="30%"><font color="ffffff"><h4><b>잇다</b>의 회원이 아니신가요?</h4></font><br></td>
							<td></td>
						</tr>
						<tr align="center">
							<td width="20%"></td>
							<td width="30%"><button class="btn btn-default btn-lg"><a href="./login.php"><font color="#ff8400"><b>로그인</b></font></a></button></td>
							<td width="30%"><button class="btn btn-default btn-lg"><a href="./choose_m.php"><font color="#ffd800"><b>회원가입</b></font></a></button></td>
							<td></td>
						</tr>
						<tr height="200"><td></td></tr>
					</table>
				</center>
<?			  }  ?>
				<!-- //flexSlider -->
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- banner-bottom -->
	<div class="banner-bottom-agileits">
		<div class="container">
			<a href = "get_transaction.php">
			<div class="col-md-3 bottom1">
				<div class="bottom-agileinfo">
	<?			if(!$cookie_no) { echo("<a href='./p_login.php'>"); }
					else { echo("<a href='./get_transaction.php'>"); }    ?>
					<h3>자격증</h3>
					<p><br>자신의 자격증을 볼 수 있습니다.<br><br></p>	
					<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
				</div>
			</div>
			</a>
			<a href = "get_transaction.php">
			<div class="col-md-3 bottom2">
				<div class="bottom-w3-agileits">
	<?			if(!$cookie_no) { echo("<a href='p_login.php'>"); }
					else { echo("<a href='get_transaction.php'>"); }    ?>
					<h3>경력</h3>
					<p><br>자신의 경력을 볼 수 있습니다. <br><br></p>		
					<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
				</div>
			</div>
			</a>
			<a href = "get_transaction.php">
			<div class="col-md-3 bottom3">
				<div class="bottom-agile">
	<?			if(!$cookie_no) { echo("<a href='p_login.php'>"); }
					else { echo("<a href='get_transaction.php'>"); }    ?>
					<h3>수상경력</h3>
					<p><br>자신의 수상경력을 볼 수 있습니다. <br><br></p>		
					<i class="fa fa-arrow-circle-o-right" aria-hidden="true"></i></a>
				</div>
			</div>
			</a>
			<a href = "get_transaction.php">
			<div class="col-md-3 bottom4">
				<div class="bottom-w3-agile">
	<?			if(!$cookie_no) { echo("<a href='p_login.php'>"); }
					else { echo("<a href='get_transaction.php'>"); }    ?>
					<h3>사회활동</h3>
					<p><br>자신의 사회활동들을 볼 수 있습니다. <br><br></p>				
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
                    	<h2 class="txt">개발자 보러 가기</h1> 
                    </div>
                    <div class="text-desc">
                    	<img class="img-responsive" src="images/it_da_mem.jpg">
                    </div>
                </div>
			</div>
			<div class="col-md-7 process_right">
				<h2>자신의 이력이 인증되는 과정</h2>
				<p>기존에 이력서를 자신이 기억하여 써야하는 프로그램이었다면,<BR>'IT다'는 <B>수상, 경력, 자격증</B>등과 같은 기본적인 이력들이 그 기관에서 이수가 끝나거나 수상시 자체적으로 인증해주어 자동으로 자신의 이력서에 들어오게 된다.</p>
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
include "footer.php";
?>