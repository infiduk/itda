<?
	$cookie_no=$_COOKIE[cookie_no];
	$cookie_name=$_COOKIE[cookie_name];
	
	include "common.php";
	
	$no=$_REQUEST[no];
	$user_no=$_REQUEST[user_no];
	
	$query="select information from confirmation where no=$no";
	$result=mysqli_query($db,$query);
	if(!$result) exit("err1 : $query");
	$row=mysqli_fetch_array($result);
	$str=$row[information];
	
	$query="select account from member where no=$cookie_no";
	$result=mysqli_query($db,$query);
	if(!$result) exit("err1 : $query");
	$row=mysqli_fetch_array($result);
	$company_account=$row[account];
	
	$query="select account from member where no=$user_no";
	$result=mysqli_query($db,$query);
	if(!$result) exit("err2 : $query");
	$row=mysqli_fetch_array($result);
	$user_account=$row[account];
?>
<!DOCTYPE html>
<html>
	<head>
	<meta http-equiv="Content-type" content="text/html; charset=utf-8" />
	<title>
		잇다
	</title>
	<!-- web3 -->
		<script src="https://cdn.rawgit.com/ethereum/web3.js/develop/dist/web3.min.js"></script>
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="../js/bignumber.min.js"></script>
		<script type="text/javascript" src="../js/crypto-js.js"></script>
		<script type="text/javascript" src="../js/utf8.js"></script>
		<script type="text/javascript" src="../js/web3.js"></script>
		<script type="text/plain" src="rawgit.com/ethereumjs/browser-builds/master/dist/ethereumjs-tx/ethereumjs-tx-1.3.3.js"></script>
	</head>
	<body>
		<script language = "javascript">
			var Web3 = require('web3');
			var web3 = new Web3();
			//
			//web3 = new Web3(new Web3.providers.HttpProvider("http://it_da.iptime.org:8545"));
			web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
			var eth = web3.eth;
			var str = "<?=$str?>";
			
			var password = "password";
			// 보낼주소 (기관)
			var company_account = "<?=$company_account?>";
			// 받는주소 (사용자)
			var user_account = "<?=$user_account?>";
			
			/*function check_work() {
				if(eth.getBlock("pending").transaction.length > 0){
					if(eth.mining) return;
					console.log("start");
					jsonrpc_api('miner_start',1);
				} else {
				if(!eth.mining) return;
					console.log("no");
					jsonrpc_api('miner_stop',0);
				}
			}
			
			function jsonrpc_api(method, param) {
			//'{"jsonrpc":"2.0","method":"miner_stop","params":[0],"id":1}
			  $.ajax({
				url     : 'http://it_da.iptime.org:8545/',
				type    : 'POST',
				dataType: 'json',
				timeout : 30000,
				headers : {
				  'Accept'           : 'application/json',
				  'Content-type'    : 'application/json'
					  },
				data    : JSON.stringify({
				  'jsonrpc' : "2.0",
				  'method'  : method,
				  'params'  : [param],
				  'id'      : 1})

			  }).done(function(data, status, jqXHR) {
				// 成功時
				console.log(data);
			  }).fail(function(error, status, errorThrown) {
				// 失敗時
				console.log(error);
			  });
			}
			/
			// 관리자 계정 잠금 해제
			web3.personal.unlockAccount("0x14d7621950cd042fbd2b76aaf3e1d365fb553aa2", "password", 1000);
			
			// 거래
			web3.eth.sendTransaction({
			from: "0x14d7621950cd042fbd2b76aaf3e1d365fb553aa2",
			to: company_account,
			value: web3.toWei(1, "ether"),			
			});
			*/
			//eth.filter("latest", function(err,block) {check_work(); });
			//eth.filter("pending", function(err,block) {check_work(); });
			
			// 거래할때 주석 풀고하면댐
			// 거래시 계좌 잠금 풀기
			web3.personal.unlockAccount(company_account, password, 1000);
			
			// 거래
			web3.eth.sendTransaction({
			from: company_account,
			to: user_account,
			value: web3.toWei(0.000000001, "ether"),
			data: web3.toHex(str)			
			})
	
			//eth.filter("latest", function(err,block) {check_work(); });
			//eth.filter("pending", function(err,block) {check_work(); });
			
			location.href = "confirmation_delete.php?no=<?=$no?>";
		</script>
	</body>
</html>