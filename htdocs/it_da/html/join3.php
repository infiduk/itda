<!--
	Author: W3layouts
	Author URL: http://w3layouts.com
	License: Creative Commons Attribution 3.0 Unported
	License URL: http://creativecommons.org/licenses/by/3.0/
-->

<!DOCTYPE html>
<html>
<head>
<title>잇(it)다♥</title>

<meta name="viewport" content="width=device-width, initial-scale=1" />
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Online Joining form Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<script src="js/jquery-2.2.3.min.js"></script>

<!-- web3 -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="./js/bignumber.min.js"></script>
	<script type="text/javascript" src="./js/crypto-js.js"></script>
	<script type="text/javascript" src="./js/utf8.js"></script>
	<script type="text/javascript" src="./js/web3.js"></script>

<!-- custom css file -->
<link href="css1/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css1/style.css">
<!-- //custom css file -->

<!-- google fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //google fonts -->
		
</head>

			
<body>

<script language = "javascript">

$(function () {
	$("#cpwd").keyup(function () {
		var pw = document.getElementById("pwd").value;
		var pwck = document.getElementById("cpwd").value;

		if (pw != pwck) {
			document.getElementById("pwd_check").innerHTML = "<font color='red'>비밀번호가 일치하지 않습니다.</font>";
		} else {
			document.getElementById("pwd_check").innerHTML = "<font color='#4AB34A'>비밀번호가 일치합니다.</font>";
		}
		if (!pw || !pwck) {
			document.getElementById("pwd_check").innerHTML = "&nbsp";
		}
	});
});

$(function () {
	$("#pwd").keyup(function () {
		var pw = document.getElementById("pwd").value;
		var pwck = document.getElementById("cpwd").value;

		if (pw != pwck) {
			document.getElementById("pwd_check").innerHTML = "<font color='red'>비밀번호가 일치하지 않습니다.</font>";
		} else {
			document.getElementById("pwd_check").innerHTML = "<font color='#4AB34A'>비밀번호가 일치합니다.</font>";
		}
		if (!pw || !pwck) {
			document.getElementById("pwd_check").innerHTML = "&nbsp";
		}
	});
});

function FindZip(zip_kind) {
	window.open("zipcode.php?zip_kind=" + zip_kind, "", "scrollbars=no,width=500,height=250");
}

function check_id() {
	if (!form2.uid.value) {
		alert("이메일을 입력하십시오.");
		form2.uid.focus();
		return;
	} else if (!validateEmail(form2.uid.value)) {
		alert("이메일 형식에 맞게 입력하십시오.");
		form2.uid.focus();
		return;
	} else {
		window.open("email_check.php?uid=" + form2.uid.value, "", "scrollbars=no,width=0,height=0");
	}
}

function check_email() {
	if (form2.check_id.value) {
		alert("사용 가능한 이메일입니다.");
		$("#btnuid").css("background-color", "#4AB34A");
	} else {
		alert("중복된 이메일입니다.");
		$("#btnuid").css("background-color", "FF0000");
	}
}

function validateEmail(email) {
	var re = /^(([^<>()[\]\\.,;:\s@\"]+(\.[^<>()[\]\\.,;:\s@\"]+)*)|(\".+\"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
	return re.test(email);
}

function check_value() {
	if (!form2.check_id.value) {
		alert("이메일 중복 확인이 필요합니다.");
		form2.uid.focus();
		return;
	}
	if (!form2.uid.value) {
		alert("이메일을 입력하세요.");
		form2.uid.focus();
		return;
	}
	if (!form2.pwd.value) {
		alert("비밀번호를 입력하세요.");
		form2.pwd.focus();
		return;
	}
	if (!form2.cpwd.value) {
		alert("비밀번호를 한 번 더 입력하세요.");
		form2.cpwd.focus();
		return;
	}
	if (form2.pwd.value != form2.cpwd.value) {
		alert("비밀번호와 비밀번호 확인 값이 일치하지 않습니다.");
		form2.pwd.focus();
		return;
	}
	if (!form2.birthday1.value || !form2.birthday2.value || !form2.birthday3.value) {
		alert("생일을 정확하게 입력하세요.");
		form2.birthday1.focus();
		return;
	}
	if (!form2.email.value) {
		alert("이메일을 입력하세요.");
		form2.email.focus();
		return;
	}
	form2.submit();
}
</script>
<h1>Join membership</h1>
<div class="agile-its">
	<div class="w3layouts">
		<div class="photos-upload-view">
			<form name="form2" method="post" action="exam.php">
				
				<input type="hidden" name="check_id" value="">
					<div class="agileinfo">
					</div>
						<div class="agileinfo-row">
							<div class="ferry ferry-from">
								<label>Name</label>
								<input type="text" name="name" placeholder="띄어쓰기 없이 쓰세요." required="">
							</div>
							
							<div class="w3_agileits_main_grid_left_l">
								<h3>Gender</h3>
							</div>
							<div class="w3_agileits_main_grid_left_r">
								<div class="agileinfo_radio_button">
									<label class="radio"><input type="radio" name="gender" value="0" checked><span></span><i class="fa fa-male" aria-hidden="true"></i>Male</label>
								</div>
								<div class="agileinfo_radio_button">
									<label class="radio"><input type="radio" name="gender" value="1"><span></span><i class="fa fa-female" aria-hidden="true"></i>Female</label>
								</div>
								<div class="clear"> </div>
							</div>
								<label>Birthday</label>
								<div class="form_box1">
							   <div class="select-block1">
								<select name = 'year' required="">
									<option value="">Year</option>
									<?
									for($i=1982; $i<=2018; $i++) {
										echo("<option value='$i'>$i 년</option>");
									}
									?>
								</select>
							   </div>
								<div class="form_box">
							   <div class="select-block1 middle">
								<select name= 'month' required="">
								   <option value="">Month</option>
								   <?
									for($i=1; $i<=12; $i++) {
										echo("<option value='$i'>$i 월</option>");
									}
									?>
							   </select>
							  </div>
							 </div>
							<div class="form_box">
							  <div class="select-block1 last">
								<select name='day' required="">
									<option value="">Date</option>
									<?
									for($i=01; $i<=31; $i++) {
										echo("<option value='$i'>$i 일</option>");
									}
									?>
									
								</select>
							  </div>
							</div>
							
							<div class="clear"></div>
						</div>
							<div class="ferry ferry-from">
								<label>Email</label>
								<input type="email" name="uid" placeholder="Email@email.com" required=""><a href="javascript:check_id();">&nbsp&nbsp&nbsp <input type="button" id="btnuid" name="btnuid" value="중복확인"></a>
							</div>
							<div class="ferry ferry-from">
								<label>Password</label>
								<input type="password" name="pwd" id="pwd" placeholder="Password" required="">
							</div>
							<div class="ferry ferry-from">
								<label>Confirm Password</label>
								<input type="password" name="cpwd" id="cpwd" placeholder="한번 더 입력해주세요." required="">
							</div>
							<div class="ferry ferry-from" id="pwd_check">
							&nbsp
							</div>
						</div>


					<div class="wthree-text"> 
						<div class="wthreesubmitaits">
							<input type="submit" id="submit" name="submit" value="회원가입하기" onClick="javascript:check_value();">
						</div>  
					</div>
			</form>
						
		</div>
		<div class="clear"></div>
	</div>
</div>
</body>
</html>