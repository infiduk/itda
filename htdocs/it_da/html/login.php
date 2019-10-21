<!--Author: W3layouts
Author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE HTML>
<html>
<head>
<title>잇(it)다♥</title>  

<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">  
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Popular Login Form Responsive, Login form web template, Sign up Web Templates, Flat Web Templates, Login Sign up Responsive web template, Smart phone Compatible web template, free web designs for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<!-- Custom Theme files -->
<link href="css2/style.css" rel="stylesheet" type="text/css" media="all"/>
<!-- //Custom Theme files -->
<!-- web-font -->
<link href='//fonts.googleapis.com/css?family=Roboto+Condensed:400,700' rel='stylesheet' type='text/css'>
<!-- //web-font -->
<!-- pop-up-box -->
<script src="js/jquery-2.2.3.min.js"></script> 
<script>
	$(document).ready(function() {
		$('.popup-top-anim').magnificPopup({
			type: 'inline',
			fixedContentPos: false,
			fixedBgPos: true,
			overflowY: 'auto',
			closeBtnInside: true,
			preloader: false,
			midClick: true,
			removalDelay: 300,
			mainClass: 'my-mfp-zoom-in'
		});																							
	}); 
</script>
<!-- //pop-up-box --> 
</head>

<body>
	<!-- login starts here -->
	<div class="login agile">
		<div class="w3agile-border">
			<h2>Login</h2>
			<div class="login-main login-agileits"> 
				<form action="member_check.php" method="post">
					<p>Email</p>
					<input type="text" placeholder="example@gmail.com" name="uid" required="">
					<p>Password</p>
					<input type="password" placeholder="Password" name="pwd" required="">
					<input type="submit" value="Login">
				</form>
				<div class="social-btns w3l">
					<a class="fa" href="#">Facebook</a>
					<a class="g" href="#">Google</a>
				</div>
				<h3> 아직 회원이 아니신가요? <a href="choose_m.php"> Sign Up Now !</a></h3>
			</div>
		</div>
		<!-- modal -->
		<div id="small-dialog" class="mfp-hide">
			<h5 class="w3ls-title">회원가입</h5>
			<div class="login-modal login"> 
				<form action="#" method="post">
					<p>Name</p>
					<input type="text" placeholder="홍길동" name="name" required="">
					<p>Email</p>
					<input type="text" placeholder="example@gmail.com" name="mail" required="">
					<p>Password</p>
					<input type="password" placeholder="Password" name="Password" required="">
					<input type="submit" value="Sign Up">
				</form>
				<div class="social-btns w3l w3-agileits">
					<a class="fa" href="#"> Facebook</a>
					<a class="g" href="#"> Google</a>
				</div>  
			</div> 
		</div>
		<!-- //modal -->  
	</div>
	<!-- //login ends here -->
	<!-- copyrights -->  
	<div class="copy-rights wthree">		 	
		<p>© 2016 Popular Login Form. All Rights Reserved | Design by  <a href="http://w3layouts.com/" target="_blank">W3layouts</a> </p>		 	
	</div>
	<!-- //copyright -->
	<script src="js/jquery.magnific-popup.js" type="text/javascript"></script>
</body>
</html>