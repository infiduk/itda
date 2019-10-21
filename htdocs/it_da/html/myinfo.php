<!--author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<!DOCTYPE html>
<?
	include "common.php";
	include "top.php";
?>
<html>
<head>
<title>Referral Program form a Flat Responsive Widget Template :: w3layouts</title>
<!-- metatags-->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Referral Program form a Flat Responsive Widget,Login form widgets, Sign up Web forms , Login signup Responsive web form,Flat Pricing table,Flat Drop downs,Registration Forms,News letter Forms,Elements" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Meta tag Keywords -->
<link href="css4/style.css" rel="stylesheet" type="text/css" media="all"/><!--style_sheet-->
<link href="//fonts.googleapis.com/css?family=Montserrat:400,600,700,800,900" rel="stylesheet"><!--online_fonts-->
<link href="//fonts.googleapis.com/css?family=Lato" rel="stylesheet"><!--online_fonts-->
</head>
<?
	$query="select * from member where no = '$cookie_no';";
	$result=mysqli_query($db,$query);
	if(!$result) exit("에러: $query");
	$row=mysqli_fetch_array($result);
?>
<body>
<h1> </h1>
<div class="w3ls-main">
<h2>modify information</h2>
<div class="w3ls-form">
<form action="#" method="post">
<ul class="fields">
<div class="Refer_w3l">
<h3>Your Imfomation</h3>
	<li>	
		<label class="w3ls-opt">name<span class="w3ls-star"> </span></label>
		<div class="w3ls-name">
			<input type="text" name="username"  value="<?=$row[name]?>" required=""/>
		</div>
	</li>
	
	<li>
		<div class="mail">
			<label class="w3ls-opt">e-mail<span class="w3ls-star">  </span></label>
			<span class="w3ls-text w3ls-name">
				<input type="email" name="email" placeholder="email" value="<?=$row[uid]?>" required=""/>
			</span>
		</div>
	</li>
	<li>
		<label class="w3ls-opt">gender<span class="w3ls-star">  </span></label>	
			<span class="w3ls-text w3ls-name">
<?		if ($row[gender]==0) $gender="남성"; else $gender="여성";?>
				<input type="text" name="gender" placeholder="" value="<?=$gender?>" required=""/>
			</span>
	</li>
	</div>
	<div class="Refer_w3l">
	<li>	
		<label class="w3ls-opt">birthday<span class="w3ls-star">  </span></label>
		<div class="w3ls-name">	
			<input type="text" name="username"  placeholder="" value="<?=$row[birthday]?>" required=" "/>
		</div>
	</li>
	<li>
		<div class="mail">
			<label class="w3ls-opt">password<span class="w3ls-star">  </span></label>
			<span class="w3ls-text w3ls-name">
				<input type="email" name="email" placeholder="" value="<?=$row[pwd]?>" required=""/>
			</span>
		</div>
	</li>
	<li>
		<label class="w3ls-opt">password check<span class="w3ls-star">  </span></label>	
			<span class="w3ls-text w3ls-name">
				<input type="text" name="phone number" placeholder="" value="" required=""/>
			</span>
	</li>
	</div>
	<div class="input">
		<label class="w3ls-opt1">Tell us more about your referral</label>
		<span class="w3ls-input"><textarea placeholder=""></textarea></span>
	</div>
</ul>
<div class="clear"></div>
	<div class="w3ls-btn">
		<input type="submit" value="submit">
	</div>
</form>
</div>
</div>
<footer>&copy; 2018 Referral Program Form . All Rights Reserved | Design by <a href="http://w3layouts.com/"> W3layouts</a></footer>
</body>
</html>