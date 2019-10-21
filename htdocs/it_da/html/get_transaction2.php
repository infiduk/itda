<!DOCTYPE html>

<html>
	<head>
	<meta charset="utf-8">
	<title>
		잇다
	</title>
	<!-- web3 -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
		<script type="text/javascript" src="./js/bignumber.min.js"></script>
		<script type="text/javascript" src="./js/crypto-js.js"></script>
		<script type="text/javascript" src="./js/utf8.js"></script>
		<script type="text/javascript" src="./js/web3.js"></script>
		<script type="text/plain" src="rawgit.com/ethereumjs/browser-builds/master/dist/ethereumjs-tx/ethereumjs-tx-1.3.3.js"></script>
	</head>
	<body>
	<?
		include "common.php";
		$cookie_no=$_COOKIE[cookie_no];
			
		$query="select account from member where no=$cookie_no";
		$result=mysqli_query($db,$query);
		if(!$result) exit("$query");
		$row=mysqli_fetch_array($result);
		$user_account=$row[account];
	?>
	
		<script language = "javascript">
		$(document).ready(function() {
			
			var Web3 = require('web3');
			var web3 = new Web3();
			web3 = new Web3(new Web3.providers.HttpProvider("http://it_da.iptime.org:8545"));
			var eth = web3.eth;
			
			var password = "password";
			var user_account = "<?=$user_account?>";
			var txList = [];
			var txListCount = 0;
			
			var strTxData = "";

			//web3.personal.unlockAccount(user_account, password, 1000);

			var currentBlock = eth.blockNumber;
			var n = eth.getTransactionCount(user_account, currentBlock);
			var bal = eth.getBalance(user_account, currentBlock);
			for (var i = currentBlock; i >= 0 && (n > 0 || bal > 0); --i) {
				try {
					var block = eth.getBlock(i, true);
					if (block && block.transactions) {
						block.transactions.forEach(function(e) {
							if (user_account == e.to) {
								if (e.from != e.to)
									bal = bal.plus(e.value);
								//console.log(i, e.from, e.to, e.value.toString(10), e.hash, web3.toUtf8(e.input));
								txList[txListCount] = e.hash;
								txListCount++;
								strTxData += web3.toUtf8(e.input);
								strTxData += "**";
								
								--n;
							}
						});
					}
				} catch (e) { console.error("Error in block " + i, e); }				
			}
			document.getElementById("str_data").value = strTxData;
			document.getElementById("pass").submit();
			
		});
		</script>
		<form name="pass" id="pass" action="portfolio.php" method="post">
			<input type="hidden" name="str_data" id="str_data" value="" />
		</form>
	</body>
</html>