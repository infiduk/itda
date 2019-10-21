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

<!-- custom css file -->
<link href="css1/font-awesome.min.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="css1/style.css">
<!-- //custom css file -->

<!-- google fonts -->
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300italic,300,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<!-- //google fonts -->
		
</head>

			<script language = "javascript">
				function FindZip(zip_kind) 
				{
					window.open("zipcode.php?zip_kind="+zip_kind, "", "scrollbars=no,width=500,height=250");
				}
				function check_id()	{
					if (!form2.uid.value) {
						alert("ID를 입력하십시요.");	form2.uid.focus();	return;
					}
					window.open("member_idcheck.php?uid="+form2.uid.value,"","scrollbars=no,width=300,height=200");
				}
				function Check_Value() {
					if (!form2.check_id.value) {
						alert("중복ID 조사를 먼저 하십시요.");	form2.uid.focus();	return;
					}
					if (!form2.uid.value) {
						alert("아이디가 잘못되었습니다.");	form2.uid.focus();	return;
					}
					if (!form2.pwd.value) {
						alert("암호가 잘못되었습니다.");	form2.pwd.focus();	return;
					}
					if (!form2.pwd1.value) {
						alert("암호가 잘못되었습니다.");	form2.pwd1.focus();	return;
					}
					if (form2.pwd.value != form2.pwd1.value) {
						alert("암호가 일치하지 않습니다.");	
						form2.pwd.focus();	return;
					}
					if (!form2.birthday1.value || !form2.birthday2.value || !form2.birthday3.value) {
						alert("생일이 잘못되었습니다.");	form2.birthday1.focus();	return;
					}
					if (!form2.tel1.value || !form2.tel2.value || !form2.tel3.value) {
						alert("전화번호가 잘못되었습니다.");	form2.tel1.focus();	return;
					}
					if (!form2.phone1.value || !form2.phone2.value || !form2.phone3.value) {
						alert("핸드폰이 잘못되었습니다.");	form2.phone1.focus();	return;
					}
					if (!form2.zip.value) {
						alert("우편번호가 잘못되었습니다.");	form2.zip.focus();	return;
					}
					if (!form2.juso.value) {
						alert("주소가 잘못되었습니다.");	form2.juso.focus();	return;
					}
					if (!form2.email.value) {
						alert("이메일이 잘못되었습니다.");	form2.email.focus();	return;
					}

					form2.submit();
				}
			</script>
<body>

<h1>회원가입</h1>
<div class="agile-its">
	<div class="w3layouts">
		<div class="photos-upload-view">
			<form action="#" method="POST">
					<div class="agileinfo">
					</div>
						<div class="agileinfo-row">
							<div class="ferry ferry-from">
								<label>이름</label>
								<input type="text" name="Name" placeholder="띄어쓰기 없이 쓰세요" required="">
							</div>
							
							<div class="w3_agileits_main_grid_left_l">
								<h3>성별</h3>
							</div>
							<div class="w3_agileits_main_grid_left_r">
								<div class="agileinfo_radio_button">
									<label class="radio"><input type="radio" name="radio" checked=""><span></span><i class="fa fa-male" aria-hidden="true"></i>Male</label>
								</div>
								<div class="agileinfo_radio_button">
									<label class="radio"><input type="radio" name="radio"><span></span><i class="fa fa-female" aria-hidden="true"></i>Female</label>
								</div>
								<div class="clear"> </div>
							</div>
								<label>생년월일</label>
								
							<div class="form_box">
							  <div class="select-block1 middle">
								<select required="">
									<option value="">Date</option>
									<option value="">01</option>
									<option value="">02</option>
									<option value="">03</option>
									<option value="">04</option>
									<option value="">05</option>
									<option value="">06</option>
									<option value="">07</option>
									<option value="">08</option>
									<option value="">09</option>
									<option value="">10</option>
									<option value="">11</option>
									<option value="">12</option>
									<option value="">13</option>
									<option value="">14</option>
									<option value="">15</option>
									<option value="">16</option>
									<option value="">17</option>
									<option value="">18</option>
									<option value="">19</option>
									<option value="">20</option>
									<option value="">21</option>
									<option value="">22</option>
									<option value="">23</option>
									<option value="">24</option>
									<option value="">25</option>
									<option value="">26</option>
									<option value="">27</option>
									<option value="">28</option>
									<option value="">29</option>
									<option value="">30</option>
									<option value="">31</option>
								</select>
							  </div>
							</div>
							<div class="form_box">
							   <div class="select-block1">
								<select required="">
									<option value="">Month</option>
									<option value="">January</option>
									<option value="">February</option>
									<option value="">March</option>
									<option value="">April</option>
									<option value="">May</option>
									<option value="">June</option>
									<option value="">July</option>
									<option value="">August</option>
									<option value="">September</option>
									<option value="">October</option>
									<option value="">November</option>
									<option value="">December</option>
								</select>
							  </div>
							 </div>
							<div class="form_box1">
							   <div class="select-block1 last">
								<select required="">
									<option value="">Year</option>
									<option value="">1982</option>
									<option value="">1983</option>
									<option value="">1984</option>
									<option value="">1985</option>
									<option value="">1986</option>
									<option value="">1987</option>
									<option value="">1988</option>
									<option value="">1989</option>
									<option value="">1990</option>
									<option value="">1991</option>
									<option value="">1992</option>
									<option value="">1993</option>
									<option value="">1994</option>
									<option value="">1995</option>
									<option value="">1996</option>
									<option value="">1997</option>
									<option value="">1998</option>
									<option value="">1999</option>
									<option value="">2000</option>
									<option value="">2001</option>
									<option value="">2002</option>
									<option value="">2003</option>
									<option value="">2004</option>
									<option value="">2005</option>
									<option value="">2006</option>
									<option value="">2007</option>
									<option value="">2008</option>
									<option value="">2009</option>
									<option value="">2010</option>
									<option value="">2011</option>
									<option value="">2012</option>
									<option value="">2013</option>
									<option value="">2014</option>
									<option value="">2015</option>
									<option value="">2016</option>
									<option value="">2017</option>
								</select>
							   </div>
							   <div class="ferry ferry-from">
								<label>이메일</label>
								<input type="email" name="email" placeholder="Email" required="">
							</div>
							<div class="ferry ferry-from">
								<label>비밀번호</label>
								<input type="password" name="password" placeholder="Password" required="">
							</div>
							<div class="ferry ferry-from">
								<label>비밀번호 확인</label>
								<input type="password" name="cpassword" placeholder="Confirm Password" required="">
							</div>
							</div>
							<div class="clear"></div>
						</div>
					<div class="wthree-text"> 
						<div class="wthreesubmitaits">
							<input type="submit" name="submit" value="회원가입하기">
						</div>  
					</div>
			</form>
						
		</div>
		<div class="clear"></div>
	</div>
</div>
<div class="footer">
	<p> © 2017 Online Joining form. All Rights Reserved | Design by  <a href="http://w3layouts.com/"> W3layouts</a></p>
</div>


</body>
</html>