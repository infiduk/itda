<meta charset="utf-8">
<? 
	include "./common.php";

	$cookie_no=$_COOKIE[cookie_no];

	$address=$_REQUEST[address];
	$tel1=$_REQUEST[tel1];
	$tel2=$_REQUEST[tel2];
	$tel3=$_REQUEST[tel3];
	$image=$_REQUEST[image];
	$imagename=$_REQUEST[imagename];
	$img_del=$_REQUEST[img_del];
	$memo=$_REQUEST[memo];

	$tel = sprintf("%-3s%-4s%-4s", $tel1, $tel2, $tel3);
	if(!$tel1){ $tel=""; }

	if($imagename){
		$fname=$imagename;
			if ($_FILES["image"]["error"]==0){
				$fname=$_FILES["image"]["name"];
				$fsize=$_FILES["image"]["size"];
				if (!move_uploaded_file($_FILES["image"]["tmp_name"],
				  "../img/" . $fname)) exit("업로드 실패");
				}else $fname=$imagename;
			
	  } else {
		$fname="";
			if ($_FILES["image"]["error"]==0){   
				$fname=$_FILES["image"]["name"];
				$fsize=$_FILES["image"]["size"];
				if (!move_uploaded_file($_FILES["image"]["tmp_name"],
				  "../img/" . $fname)) exit("!업로드 실패 : $image, $fname, $fsize");
				}
	  }
	if ($img_del=="삭제") $fname="";
	
	$query="select * from m_detail where m_no=$cookie_no";
	$result=mysqli_query($db, $query);
	if(!$result) exit ("에러1 : $query");
	$row=mysqli_fetch_array($result);

	if($row){
		$query="update m_detail set tel='$tel', address='$address', image='$fname', memo='$memo' where m_no=$cookie_no;";
	} else {
		$query="insert into m_detail (m_no, tel, address, image,memo) values($cookie_no, '$tel', '$address', '$fname', '$memo');";
	}
	$result=mysqli_query($db,$query);
	if(!$result) exit ("에러2 : $query");

?>
<script>location.href="../company/portfolio.php"</script>
