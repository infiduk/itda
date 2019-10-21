<!DOCTYPE html>
<html lang="en">
<head>
<title>잇(it)다♥</title>
<?
	
	$cookie_no=$_COOKIE[cookie_no];
	$cookie_name=$_COOKIE[cookie_name];
?>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="../css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="../css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="../js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="../css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome-icons -->
<link href="../css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="../fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='../fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>
<body>
<!-- banner -->
	<div class="banner">
		<div class="container">
			<div class="w3_agile_banner_top">
				<div class="agile_phone_mail">
					<ul>
					<? 
						if(!$cookie_no) {
						echo("<li><a href='../login.php'>로그인</a></li>
						<li><a href='../choose_m.php'>회원가입</a></li>");
						}
						else {
						echo("<li><a href='../myinfo.php'><b>$cookie_name </b></a>님 환영합니다.</li>
						<li><a href='../member_logout.php'>로그아웃</a></li>");
						}
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
						<h1><a class="navbar-brand" href="./company_index.php"><img align="absmiddle" src="../images/IT_1.png" border="0" width="250"></a></h1>
					</div>
					<!-- Collect the nav links, forms, and other content for toggling -->
					<div class="collapse navbar-collapse navbar-right" id="bs-example-navbar-collapse-1">
						<nav class="cl-effect-13" id="cl-effect-13">
						<ul class="nav navbar-nav">
							<li ><a href="./company_index.php">Home</a></li>
							<li><a href="../about.php">About</a></li>
							<li><a href='./portfolio.php'>Portfolio</a></li>
							<li class="dropdown">
								<a href="#" class="dropdown-toggle" data-toggle="dropdown">Short Codes <b class="caret"></b></a>
								<ul class="dropdown-menu agile_short_dropdown">
									<li><a href="../icons.html">Icons</a></li>
									<li><a href="../typography.html">Typography</a></li>
								</ul>
							</li>
							<li><a href="../resume.php">Resume</a></li>
						</ul>
						
					</nav>

					</div>
				</nav>
			</div>