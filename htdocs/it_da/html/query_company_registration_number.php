<!-------------------------------------------------------------------------------------------->	
<!-- 프로그램 : 쇼핑몰 따라하기 실습지시서 (실습용 HTML)                                    -->
<!--                                                                                        -->
<!-- 만 든 이 : 윤형태 (2008.2 - 2014.8)                                                    -->
<!-------------------------------------------------------------------------------------------->
<?
	include "common.php";

	$c_number = $_REQUEST[c_number];
	$c_name = $_REQUEST[c_name];
?>

<html>
<head>
<title>사업장 찾기</title>
<!-- custom-theme -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="Coalition Responsive web template, Bootstrap Web Templates, Flat Web Templates, Android Compatible web template, 
Smartphone Compatible web template, free webdesigns for Nokia, Samsung, LG, SonyEricsson, Motorola web design" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- //custom-theme -->
<link href="css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- js -->
<script type="text/javascript" src="js/jquery-2.1.4.min.js"></script>
<!-- //js -->
<link rel="stylesheet" href="css/flexslider.css" type="text/css" media="screen" property="" />
<!-- font-awesome-icons -->
<link href="css/font-awesome.css" rel="stylesheet"> 
<!-- //font-awesome-icons -->
<link href="//fonts.googleapis.com/css?family=Montserrat" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript" src="./js/bignumber.min.js"></script>
<script type="text/javascript" src="./js/crypto-js.js"></script>
<script type="text/javascript" src="./js/utf8.js"></script>
<script type="text/javascript" src="./js/web3.js"></script>
<link rel="stylesheet" href="include/font.css">

<script language="javascript">
	function QueryCompanyRegistrationNumber() {
		if (!form.c_name.value) {
			alert("사업장 이름을 입력해주세요.");
			form.c_name.focus();
			return;
		}
		
		if (!form.c_number.value) {
			alert("사업자등록번호 앞에서 6자리를 입력해주세요.");
			form.c_number.focus();
			return;
		}
		form.submit();
	}

	function query_ok(cname) {
		opener.form2.company_name.value = cname;
		opener.company_ok();
		this.close();
	}
				
</script>
</head>
<body bgcolor="#FFFFFF" style="margin:0">

<script language="javascript">
	window.resizeTo(600, 700);
</script>

<table width="500" border="0" cellpadding="0" cellspacing="0" align="center">
	<tr>
		<td><br>
			<form name="form" method="post" action="query_company_registration_number.php">

				<table align="center" width="100%" border="0" cellspacing="5" cellpadding="0">
					<tr align="center"> 
						<td><input type="text" style="text-align:center" name="c_number" placeholder="사업자등록번호 앞 6자리" value="<?=$c_number?>" size="20" maxlength="6" style = "border:1 solid #E5E5E5;font-size:9pt"></td>
						<td><input type="text" style="text-align:center" name="c_name" placeholder="사업장 이름" value="<?=$c_name?>" size="24" maxlength="20" style = "border:1 solid #E5E5E5;font-size:9pt"></td>
						<td width="10%"><a href = "javascript:QueryCompanyRegistrationNumber()">검색</a></td>
					</tr>
				</table>
			</form>
		</td>
	</tr>
</table>
<?
// 사업장 정보조회 서비스 공공DB
$ch = cURL_init();
$url = 'http://apis.data.go.kr/B552015/NpsBplcInfoInqireService/getBassInfoSearch'; /*URL*/
$queryParams = '?'.urlencode('ServiceKey').'=cFmEh8M3fAY7PFTI8y2HbhoRPDIlKlizlEzLwOMWJYoZcNahg4thJ6%2FYkqrMZm6C6XItLkb0TqaeojCZU7AE%2Bg%3D%3D';
$queryParams .= '&'.urlencode('bzowr_rgst_no').'='.urlencode($c_number);
$queryParams .= '&'.urlencode('wkpl_nm').'='.urlencode($c_name);
$queryParams .= '&'.urlencode('numOfRows').'='.urlencode('1000');

curl_setopt($ch, CURLOPT_URL, $url.$queryParams);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, TRUE);
curl_setopt($ch, CURLOPT_HEADER, FALSE);
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, 'GET');
$response = curl_exec($ch);
curl_close($ch);

$object = simplexml_load_string($response);

$num_of_rows = $object->body->numOfRows; // 조회할 레코드 개수
$count = $object->body->totalCount; // 전체 레코드 개수
$r_count = 0; // 실제로 표시되는 레코드 개수 세는 변수
$rows_in_page = 3;

if(!$page) $page = 1; // 페이지 번호
$pages = 0; // 0일 때 체크 돼서 1부터 시작함
//$pages = ceil($count/$num_of_rows); // 전체 페이지 수

$first_row = 0; // 해당 페이지의 첫 번째 레코드 번호
$target_row = $num_of_rows;
//if($count>0) $first_row = $num_of_rows*($page-1);

//if(($count - $first_row) < $rows_in_page) $last_row = $count - $first_row;\

// 필요한 값 추출하는 부분
if($count>0) {
	for($i=0; $i<$num_of_rows; $i++) {
		$flag = 0; // continue 지정 플래그
		
		$company_name = $object->body->items->item[$i]->wkplNm;
		$status = $object->body->items->item[$i]->wkplJnngStcd;
		if($i>0) {
			for($j=$i-1; $j>=0; $j--) {
				if(!strcmp($company_name, $object->body->items->item[$j]->wkplNm) || $status != 1) {
					$flag = 1;
					break;
				}
			}
			if($flag) {
				continue;
			}
		}
		if(($r_count % $rows_in_page) == 0) { // 0일 때 체크 됨
			$pages++;
			
		}
		$r_count++; // 실제로 표시되는 레코드 개수 세기
		//$first_row = $i + 1;
	}
	//exit("$r_count"." "."$pages");
	$last_row = $r_count % $rows_in_page;
}
$row_count = $r_count; // 실제로 표시되는 레코드 개수 저장
$r_count = 0; // 다시 초기화
?>
<div class="container">
	<div class="col-md bottom">
		<div class="container">
			<div class="wthree_gallery_grids">
				<div id="jzBox" class="jzBox">
					<div id="jzBoxNextBig"></div>
					<div id="jzBoxPrevBig"></div>
					<img src="#" id="jzBoxTargetImg" alt=" " />
					<div id="jzBoxBottom">
						<div id="jzBoxTitle"></div>
						<span id="jzBoxMoreItems">
							<div id="jzBoxCounter"></div>
							<i class="arrow-left" id="jzBoxPrev"></i> 
							<i class="arrow-right" id="jzBoxNext"></i> 
						</span>
						<i class="close" id="jzBoxClose"></i>
					</div>
				</div>
				<div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
					
					<div id="myTabContent" class="tab-content">
						<div role="tabpanel" class="tab-pane fade in active" id="tab1" aria-labelledby="tab1-tab">
							<div class="tab_img">
							<?
								if($count>0) {
									for($i=0; $i<$num_of_rows; $i++) {
										$flag = 0; // continue 지정 플래그
										
										$company_name = $object->body->items->item[$i]->wkplNm;
										$company_registration_number = $object->body->items->item[$i]->bzowrRgstNo;
										$company_address = $object->body->items->item[$i]->wkplRoadNmDtlAddr;
										$status = $object->body->items->item[$i]->wkplJnngStcd;
										
										if($i>0) {
											for($j=$i-1; $j>-1; $j--) {
												if(!strcmp($company_name, $object->body->items->item[$j]->wkplNm) || $status != 1) {
													$flag = 1;
													break;
												}
											}
											if($flag) {
												continue;
											}
										}
										echo("<a href='javascript:query_ok(\"$company_name\");'>
												<table class='table table-bordered'>
													<tr><td rowspan='2' width='15%' style='line-height:70px'>$company_registration_number</td>
														<td>$company_name</td></tr>
													<tr><td>$company_address</td></tr>
												</table>
											  </a><br>");
										$r_count++; // 실제로 표시되는 레코드 개수 셈
										//echo("$r_count");
										$first_row = $i + 1;
										
										if($r_count != 0 && ($r_count % $rows_in_page) == 0)
											break;
										if($r_count==$row_count)
											break;
									}
								}
							?>
							</div>
						</div>
						<?
						if($pages>1) {
							for($p=2; $p<=$pages; $p++) {
								echo("<div role='tabpanel' class='tab-pane fade' id='tab$p' aria-labelledby='tab$p-tab'>");
						?>
							<div class="tab_img">
							<?
								if($count>0) {
									for($i=$first_row; $i<$num_of_rows; $i++) {
										$flag = 0; // continue 지정 플래그
										
										$company_name = $object->body->items->item[$i]->wkplNm;
										$company_registration_number = $object->body->items->item[$i]->bzowrRgstNo;
										$company_address = $object->body->items->item[$i]->wkplRoadNmDtlAddr;
										$status = $object->body->items->item[$i]->wkplJnngStcd;
										
										if($i>0) {
											for($j=$i-1; $j>-1; $j--) {
												if(!strcmp($company_name, $object->body->items->item[$j]->wkplNm) || $status != 1) {
													$flag = 1;
													break;
												}
											}
											if($flag) {
												continue;
											}
										}
										echo("<a href='javascript:query_ok(\"$company_name\");'>
												<table class='table table-bordered'>
													<tr><td rowspan='2' width='15%' style='line-height:70px'>$company_registration_number</td>
														<td>$company_name</td></tr>
													<tr><td>$company_address</td></tr>
												</table>
											  </a><br>");
										$r_count++; // 실제로 표시되는 레코드 개수 셈
										$first_row = $i + 1;
										if($r_count != 0 && ($r_count % $rows_in_page) == 0) 
											break;
										if($r_count==$row_count)
											break;
									}
								}
							?>
							</div>
						</div>
						<?
							}
						}
						?>
					</div>
					
					<ul id="myTab" class="nav nav-tabs" role="tablist">
						<li role="presentation" class="active"><a href="#tab1" id="tab1-tab" role="tab" data-toggle="tab" aria-controls="tab1" aria-expanded="true">1</a></li>
						<?
						if($pages>1) {
							for($i=2; $i<=$pages; $i++)
								echo("<li role='presentation'><a href='#tab$i' id='tab$i-tab' role='tab' data-toggle='tab' aria-controls='tab$i'>$i</a></li>");
						}
						?>
					</ul>
					
				</div>
			</div>
			<script src="js/jzBox.js"></script>
		</div>
	</div>
</div>
<script src="js/bootstrap.js"></script>
</body>
</html>



