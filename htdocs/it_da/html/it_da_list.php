<!--
author: W3layouts
author URL: http://w3layouts.com
License: Creative Commons Attribution 3.0 Unported
License URL: http://creativecommons.org/licenses/by/3.0/
-->
<?
	include "p_top.php";
	
	$str_data = $_REQUEST[str_data];
	$a_row = explode("**",$str_data);
	$c_row = count($a_row); // 데이터 수
?>


<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
<script type="text/javascript" src="./js/bignumber.min.js"></script>
<script type="text/javascript" src="./js/crypto-js.js"></script>
<script type="text/javascript" src="./js/utf8.js"></script>
<script type="text/javascript" src="./js/web3.js"></script>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />




<div class="container">
<div class="col-md bottom">
<div class="gallery">
	<div class="container">
		<h2 class="w3l_head w3l_head1">나의 이력</h2><h5 align="right"><a href='./confirmation_select.php'>요청하기</a></h5>
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
				<ul id="myTab" class="nav nav-tabs" role="tablist">
					<li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">전체보기</a></li>
					<li role="presentation"><a href="#education" id="education-tab" role="tab" data-toggle="tab" aria-controls="education">학력</a></li>
					<li role="presentation"><a href="#career" role="tab" id="career-tab" data-toggle="tab" aria-controls="career">경력</a></li>
					<li role="presentation"><a href="#certificate" role="tab" id="certificate-tab" data-toggle="tab" aria-controls="certificate">자격증</a></li>
					<li role="presentation"><a href="#awards" role="tab" id="awards-tab" data-toggle="tab" aria-controls="awards">수상내역</a></li>
					<li role="presentation"><a href="#social" role="tab" id="social-tab" data-toggle="tab" aria-controls="social">사회활동</a></li>
				</ul>
				<div id="myTabContent" class="tab-content">
					<div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
						<div class="tab_img">
							<div class="bs-docs-example">
								<table class="table table-striped">
									<thead id="education-thead">
										<tr>
											<th>학교명</th>
											<th>학과명</th>
											<th>날짜</th>
											<th>상태</th>
										</tr>
									</thead>
									<tbody id="education-tbody">
										<?
											for($i=0; $i<$c_row; $i++) {
												$a_col = explode("#",$a_row[$i]);
												
												if($a_col[0]==0) {
													echo("<tr>");
													for($j=1; $j<5; $j++) {
														echo("<td>$a_col[$j]</td>");
													}
													echo("</tr>");
												}
											}
										?>
									</tbody>
								</table>
							</div>
							<hr class="bs-docs-separator">
							<div class="bs-docs-example">
								<table class="table table-striped">
									<thead id="career-thead">
										<tr>
											<th>회사명</th>
											<th>부서명</th>
											<th>직급</th>
											<th>업무 내용</th>
											<th>근무 기간</th>
										</tr>
									</thead>
									<tbody id="career-tbody">
										<?
											for($i=0; $i<$c_row; $i++) {
												$a_col = explode("#",$a_row[$i]);
												
												if($a_col[0]==1) {
													echo("<tr>");
													for($j=1; $j<6; $j++) {
														if($j==5) {
															$k=$j+1;
															echo("<td>$a_col[$j] ~ $a_col[$k]</td>");
														}
														else
															echo("<td>$a_col[$j]</td>");
														
													}
													echo("</tr>");
												}
											}
										?>
									</tbody>
								</table>
							</div>
							<hr class="bs-docs-separator">
							<div class="bs-docs-example">
								<table class="table table-striped">
									<thead id="certificate-thead">
										<tr>
											<th>발급기관</th>
											<th>자격증명</th>
											<th>취득일</th>
											<th>상태</th>
										</tr>
									</thead>
									<tbody id="certificate-tbody">
										<?
											for($i=0; $i<$c_row; $i++) {
												$a_col = explode("#",$a_row[$i]);
												
												if($a_col[0]==2) {
													echo("<tr>");
													for($j=1; $j<5; $j++) {
														echo("<td>$a_col[$j]</td>");
													}
													echo("</tr>");
												}
											}
										?>
									</tbody>
								</table>
							</div>
							<hr class="bs-docs-separator">
							<div class="bs-docs-example">
								<table class="table table-striped">
									<thead id="awards-thead">
										<tr>
											<th>수상 기관</th>
											<th>수상 명</th>
											<th>수상 내용</th>
											<th>수상 날짜</th>
										</tr>
									</thead>
									<tbody id="awards-tbody">
										<?
											for($i=0; $i<$c_row; $i++) {
												$a_col = explode("#",$a_row[$i]);
												
												if($a_col[0]==3) {
													echo("<tr>");
													for($j=1; $j<5; $j++) {
														echo("<td>$a_col[$j]</td>");
													}
													echo("</tr>");
												}
											}
										?>
									</tbody>
								</table>
							</div>
							<hr class="bs-docs-separator">
							<div class="bs-docs-example">
								<table class="table table-striped">
									<thead id="social-thead">
										<tr>
											<th>제목</th>
											<th>주최 기관</th>
											<th>진행 기간</th>
										</tr>
									</thead>
									<tbody id="social-tbody">
										<?
											for($i=0; $i<$c_row; $i++) {
												$a_col = explode("#",$a_row[$i]);
												
												if($a_col[0]==4) {
													echo("<tr>");
													for($j=1; $j<4; $j++) {
														if($j==3) {
															$k=$j+1;
															echo("<td>$a_col[$j] ~ $a_col[$k]</td>");
														}
														else 
															echo("<td>$a_col[$j]</td>");
													}
													echo("</tr>");
												}
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="education" aria-labelledby="education-tab">
						<div class="tab_img">
							<div class="bs-docs-example">
								<table class="table table-striped">
									<thead id="education-thead">
										<tr>
											<th>학교명</th>
											<th>학과명</th>
											<th>날짜</th>
											<th>상태</th>
										</tr>
									</thead>
									<tbody id="education-tbody">
										<?
											for($i=0; $i<$c_row; $i++) {
												$a_col = explode("#",$a_row[$i]);
												
												if($a_col[0]==0) {
													echo("<tr>");
													for($j=1; $j<5; $j++) {
														echo("<td>$a_col[$j]</td>");
													}
													echo("</tr>");
												}
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="career" aria-labelledby="career-tab">
						<div class="tab_img">
							<div class="bs-docs-example">
								<table class="table table-striped">
									<thead id="career-thead">
										<tr>
											<th>회사명</th>
											<th>부서명</th>
											<th>직급</th>
											<th>업무 내용</th>
											<th>근무 기간</th>
										</tr>
									</thead>
									<tbody id="career-tbody">
										<?
											for($i=0; $i<$c_row; $i++) {
												$a_col = explode("#",$a_row[$i]);
												
												if($a_col[0]==1) {
													echo("<tr>");
													for($j=1; $j<6; $j++) {
														if($j==5) {
															$k=$j+1;
															echo("<td>$a_col[$j] ~ $a_col[$k]</td>");
														}
														else
															echo("<td>$a_col[$j]</td>");
														
													}
													echo("</tr>");
												}
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="certificate" aria-labelledby="certificate-tab">
						<div class="tab_img">
							<div class="bs-docs-example">
								<table class="table table-striped">
									<thead id="certificate-thead">
										<tr>
											<th>발급기관</th>
											<th>자격증명</th>
											<th>취득일</th>
											<th>상태</th>
										</tr>
									</thead>
									<tbody id="certificate-tbody">
										<?
											for($i=0; $i<$c_row; $i++) {
												$a_col = explode("#",$a_row[$i]);
												
												if($a_col[0]==2) {
													echo("<tr>");
													for($j=1; $j<5; $j++) {
														echo("<td>$a_col[$j]</td>");
													}
													echo("</tr>");
												}
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="awards" aria-labelledby="awards-tab">
						<div class="tab_img">
							<div class="bs-docs-example">
								<table class="table table-striped">
									<thead id="awards-thead">
										<tr>
											<th>수상 명</th>
											<th>내용</th>
											<th>수상 기관</th>
											<th>수상 날짜</th>
										</tr>
									</thead>
									<tbody id="awards-tbody">
										<?
											for($i=0; $i<$c_row; $i++) {
												$a_col = explode("#",$a_row[$i]);
												
												if($a_col[0]==3) {
													echo("<tr>");
													for($j=1; $j<5; $j++) {
														echo("<td>$a_col[$j]</td>");
													}
													echo("</tr>");
												}
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
					
					<div role="tabpanel" class="tab-pane fade" id="social" aria-labelledby="social-tab">
						<div class="tab_img">
							<div class="bs-docs-example">
								<table class="table table-striped">
									<thead id="social-thead">
										<tr>
											<th>제목</th>
											<th>주최 기관</th>
											<th>진행 기간</th>
										</tr>
									</thead>
									<tbody id="social-tbody">
										<?
											for($i=0; $i<$c_row; $i++) {
												$a_col = explode("#",$a_row[$i]);
												
												if($a_col[0]==4) {
													echo("<tr>");
													for($j=1; $j<4; $j++) {
														if($j==3) {
															$k=$j+1;
															echo("<td>$a_col[$j] ~ $a_col[$k]</td>");
														}
														else 
															echo("<td>$a_col[$j]</td>");
													}
													echo("</tr>");
												}
											}
										?>
									</tbody>
								</table>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<script src="js/jzBox.js"></script>
	</div>
</div>
</div>
</div>
</div>
<br><br><br>
<?
include "footer.php";
?>
</html>
