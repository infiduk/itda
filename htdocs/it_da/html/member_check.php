<?
	include "common.php";

	$uid =$_POST[uid];
	$pwd=$_POST[pwd];

	$query="select no, name, gender from member where uid='$uid' and pwd='$pwd';";

	$result=mysqli_query($db,$query);
	if(!$result) exit("에러:$query");
	$count=mysqli_num_rows($result);
	$row=mysqli_fetch_array($result);	

	if ($count>0) {
		
		setcookie("cookie_no", $row[no]);
		setcookie("cookie_name", $row[name]);

		 //고객의 번호와 이름을 cookie로 저장(cookie_no, cookie_name)
		if($row[gender] == 1 || $row[gender] == 0 ) // 개인회원
			echo("<script>location.href='index.php'</script>");
		else if($row[gender] == 2) // 기업회원
			echo("<script>location.href='./company/company_index.php'</script>"); // 경로 수정해야함
		//index.php로 이동.  
		else {
			setcookie("cookie_no","");
			setcookie("ccookie_name","");
			echo("<script>
				alert('데이터 에러 발생');
				location.href='index.php'</script>");
		}
	}
	
	else {
		echo("<script>
				alert('로그인 정보를 확인해주세요.');
				location.href='login.php';
			  </script>");
	}

	   //member_login.php 로 이동.

?>