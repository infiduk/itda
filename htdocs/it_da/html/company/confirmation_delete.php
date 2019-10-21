<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
<?
	include "common.php";

	$no=$_REQUEST[no];
	$type=$_REQUEST[type];
	$query="delete from confirmation where no=$no;";
	$result=mysqli_query($db,$query);
	if(!$result) exit("$query");	

	echo("<script>
			alert('삭제되었습니다.');");

	if(!$type){
		echo("location.href='confirmation_list.php';  </script>");
	}
	else if($type=1){
		echo("location.href='c_career.php';  </script>");
	}
	else if($type=2){
		echo("location.href='c_certificate.php';  </script>");
	}
	else if($type=3){
		echo("location.href='c_awards.php';  </script>");
	}
	else if($type=4){
		echo("location.href='c_activity.php';  </script>");
	}	
		  
?>