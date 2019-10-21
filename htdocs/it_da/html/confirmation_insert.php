<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<?
	include "common.php";

	$cookie_no=$_COOKIE[cookie_no];
	$cookie_name=$_COOKIE[cookie_name];
	$name=$_REQUEST[name];
	$type=$_REQUEST[type];
	$com_name = $_REQUEST[com_name];
	$com_no = $_REQUEST[com_no];

	if($type==0){
		$major = $_REQUEST[major];
		$date = $_REQUEST[date];
		$state = $_REQUEST[state];
		switch($state) {
			case 0:
				$state = "재학";
				break;
			
			case 1:
				$state = "휴학";
				break;
			
			case 2:
				$state = "졸업예정";
				break;
			
			case 3:
				$state = "졸업";
				break;
			
			default:
			break;
		}

		$information =$type."#".$com_name."#".$major."#".$date."#".$state;

		$query="insert into confirmation (member_no, information, company_no) values('$cookie_no', '$information', $com_no);";
		$result=mysqli_query($db,$query);
		if(!$result) exit("에러:$query");
	}

	if($type==1){
		$department = $_REQUEST[department];
		$position = $_REQUEST[position];
		$task = $_REQUEST[task];
		$year=$_REQUEST[year];
		$month=$_REQUEST[month];
		$day=$_REQUEST[day];
		$year2=$_REQUEST[year2];
		$month2=$_REQUEST[month2];
		$day2=$_REQUEST[day2];
	
		$date = sprintf("%04d-%02d-%02d",$year,$month,$day);
		$date2 = sprintf("%04d-%02d-%02d",$year2,$month2,$day2);

		$information = $type."#".$com_name."#".$department."#".$position."#".$task."#".$date."#".$date2;

		$query="insert into confirmation (member_no, information, company_no)	values('$cookie_no', '$information', $com_no);";
		$result=mysqli_query($db,$query);
		if(!$result) exit("에러:$query");
	}

	if($type==2){
		$name = $_REQUEST[name];
		$state = $_REQUEST[state];
		$year=$_REQUEST[year];
		$month=$_REQUEST[month];
		$day=$_REQUEST[day];
	
		$date = sprintf("%04d-%02d-%02d",$year,$month,$day);
		if($state == 0)
			$state = "취득완료";
		
		$information = $type."#".$com_name."#".$name."#".$date."#".$state;

		$query="insert into confirmation (member_no, information, company_no)	values('$cookie_no', '$information', $com_no);";
		$result=mysqli_query($db,$query);
		if(!$result) exit("에러:$query");
	}

	if($type==3){
		$title = $_REQUEST[title];
		$content = $_REQUEST[content];
		$year=$_REQUEST[year];
		$month=$_REQUEST[month];
		$day=$_REQUEST[day];
	
		$date = sprintf("%04d-%02d-%02d",$year,$month,$day);

		$information = $type."#".$com_name."#".$title."#".$content."#".$date;

		$query="insert into confirmation (member_no, information, company_no)	values('$cookie_no', '$information', $com_no);";
		$result=mysqli_query($db,$query);
		if(!$result) exit("에러:$query");
	}

	if($type==4){
		$title = $_REQUEST[title];
		$year=$_REQUEST[year];
		$month=$_REQUEST[month];
		$day=$_REQUEST[day];
		$year2=$_REQUEST[year2];
		$month2=$_REQUEST[month2];
		$day2=$_REQUEST[day2];
	
		$date = sprintf("%04d-%02d-%02d",$year,$month,$day);
		$date2 = sprintf("%04d-%02d-%02d",$year2,$month2,$day2);

		$information = $type."#".$com_name."#".$title."#".$date."#".$date2;

		$query="insert into confirmation (member_no, information, company_no)	values('$cookie_no', '$information', $com_no);";
		$result=mysqli_query($db,$query);
		if(!$result) exit("에러:$query");
	}



	echo("<script>location.href='success.php'</script>");
?>