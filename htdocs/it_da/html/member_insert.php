 <?php
	include "common.php";
	
	$uid=$_REQUEST[uid];
	$pwd=$_REQUEST[pwd];
	$name=$_REQUEST[name];
	$company_name=$_REQUEST[company_name];
	$gender=$_REQUEST[gender];

	$year=$_REQUEST[year];
	$month=$_REQUEST[month];
	$day=$_REQUEST[day];
	
	$birthday=sprintf("%04d-%02d-%02d",$year,$month,$day);

	if(!$name) {
			$name = $company_name;
			$gender = 2;
	}
	
    $account = array();
    if(isset($_POST['newAccount']) && !empty($_SERVER['HTTP_X_REQUESTED_WITH'])) {
		$account = str_replace("\"","",json_encode($_POST['newAccount'])); 
		$uid = str_replace("\"","",$_POST['uid']); 
		$pwd = str_replace("\"","",$_POST['pwd']); 
		$name = str_replace("\"","",$_POST['name']); 
		$birthday = str_replace("\"","",json_encode($_POST['birthday'])); 
		$gender = $_POST['gender']; 
		
		$query="insert into member (uid,pwd,name,birthday,gender,account) values ('$uid','$pwd','$name','$birthday','$gender','$account');";
		$result=mysqli_query($db,$query);
		if(!$result) exit("에러: $query");
		
		die();      
    }//echo("<script>location.href='joined.php'</script>");
?>

<html>
<head>
<!-- web3 -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="./js/bignumber.min.js"></script>
	<script type="text/javascript" src="./js/crypto-js.js"></script>
	<script type="text/javascript" src="./js/utf8.js"></script>
	<script type="text/javascript" src="./js/web3.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<script language = "javascript">


	$(document).ready(function() {

		var Web3 = require('web3');
		var web3 = new Web3();
		//web3 = new Web3(new Web3.providers.HttpProvider("http://it_da.iptime.org:8545"));
		web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
		var account = web3.personal.newAccount('password');
		var uid = <?=json_encode($uid)?>;
		var pwd = <?=json_encode($pwd)?>;
		var name = <?=json_encode($name)?>;
		var gender = <?=$gender?>;
		var birthday = <?=json_encode($birthday)?>;
		
		$.ajax({
			url: "member_insert.php",
			method: "POST",
			dataType: "json",
			data: {newAccount: account, uid: uid, pwd: pwd, name: name, gender: gender, birthday: birthday},
			complete: function() {
				window.location="joined.php";
			}
		});
	});
</script>

</body>
</html>


