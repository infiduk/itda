<?
	$cookie_no=$_COOKIE[cookie_no];
	$cookie_name=$_COOKIE[cookie_name];
?>
<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<html lang="en">
<head>
<title>잇(it)다♥</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="banner1">
		<div class="container">
			<div class="w3_agile_banner_top">
				<div class="agile_phone_mail">
					<ul>
					<? 
						if(!$cookie_no) {
						echo("<li><a href='login.php'>로그인</a></li>
						<li><a href='join.php'>회원가입</a></li>");}

						else {
						echo("<li>$cookie_name 님 환영합니다.</li>
						<li><a href='member_logout.php'>로그아웃</a></li>");}
					?>
					</ul>
				</div>
			</div>
			<div class="agileits_w3layouts_banner_nav">
				<nav class="navbar navbar-default">
					<div class="navbar-header navbar-left">
						<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<h1><a class="navbar-brand" href="index.php"><img align="absmiddle" src="images/title_dy.png" border="0"></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li><a href="index.html">Home</a></li>
							<li><a href="about.html">About</a></li>
							<li><a href="portfolio.html">Portfolio</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="icons.html">Icons</a></li>
									<li><a href="typography.html">Typography</a></li>
								</ul>
							</li>
							<li class="active"><a href="resume.php">Resume</a></li>
						</ul>
						
					</nav>
					</div>
				</nav>
			</div>
		</div>
	</div>
<!-- //banner -->
<!-- mail -->
	<div class="mail">
		<div class="container">
				<div class="agileits_mail_grids">
				<div class="agileits_mail_grid_left">
					<form action="#" method="post">
<!-- 이력서 사진 -->
					<table cellspacing='1' cellpadding='0' border='1' bgcolor='#000000' align='center' width="50">
						<tr width='50' >
							<td colspan='3' rowspan='3' class='ti'>
							<input type="file" name="image1" size="30" value="찾아보기"><br>
						</tr>
					</table>
					
<!-- //이력서 사진 -->
						<h4>Your Name*</h4>
						<input type="text" name="Name" placeholder="Name..." required="">
						<h4>Your Email*</h4>
						<input type="email" name="Email" placeholder="Email..." required="">
						<h4>Your Phone Number*</h4>
						<input type="text" name="Phone" placeholder="Phone..." required="">
						<h4>Your Message*</h4>
						<textarea placeholder="Message..." name="Message"></textarea>
						<input type="submit" value="Send message">
					</form>
				</div>
			</div>
		</div>
	</div>
<!-- //mail -->


<!-- footer -->
	<div class="footer">
		<div class="col-md-4 footer-left-agileits">
			<h3>Address</h3>
				<ul>
					<li><span class="glyphicon glyphicon-home" aria-hidden="true"></span> 7th Street, Melbourne City, Australia.</li>
					<li><span class="glyphicon glyphicon-envelope" aria-hidden="true"></span><a href="mailto:info@example.com">info@example.com</a></li>
					<li><span class="glyphicon glyphicon-earphone" aria-hidden="true"></span> (4584) 5689 0254 128</li>
				</ul>
		</div>
		<div class="col-md-4 footer-left-agileinfo">
			<h3>Get In Touch</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<ul class="social-icons">
					<li><a href="#" class="icon icon-border facebook"></a></li>
					<li><a href="#" class="icon icon-border twitter"></a></li>
					<li><a href="#" class="icon icon-border instagram"></a></li>
					<li><a href="#" class="icon icon-border pinterest"></a></li>
				</ul>
		</div>
		<div class="col-md-4 footer-left-w3-agileits">
			<h3>Newsletter</h3>
			<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
				<form action="#" method="post">
					<input type="email" name="email" placeholder="Your email..." required="">
					<input type="submit" value=" ">
				</form>
		</div>
		<div class="clearfix"></div>
	</div>
<!-- //footer --> 
	<div class="copyright-w3-agile">
		<div class="container">
			<p>© 2017 Coalition. All rights reserved | Design by <a href="http://w3layouts.com">W3layouts</a></p>
			<div class="clearfix"> </div>
		</div>
	</div>
<!-- for bootstrap working -->
	<script src="js/bootstrap.js"></script>
<!-- //for bootstrap working -->
</body>
</html>