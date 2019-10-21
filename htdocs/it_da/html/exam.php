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
		<script language = "javascript">
			var Web3 = require('web3');
			var web3 = new Web3();
			web3 = new Web3(new Web3.providers.HttpProvider("http://it_da.iptime.org:8545"));
			var eth = web3.eth;
			
			var password = "password";
			var user_account = <?=json_encode($_POST['user_account'])?>;
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
							if (user_account == e.from) {
								if (e.from != e.to)
									bal = bal.plus(e.value);
								console.log(i, e.from, e.to, e.value.toString(10), e.hash, web3.toUtf8(e.input));
								txList[txListCount] = e.hash;
								txListCount++;
								//if(e.input) {
									strTxData += web3.toUtf8(e.input);
									strTxData += "**";
								 //}
								alert(i + " : " + strTxData);
								--n;
							}
						});
						
					}
				} catch (e) { console.error("Error in block " + i, e); }
				
			}

		</script>
		<form name="pass" action="<?php echo $_SERVER['$PHP_SELF']; ?>" method="POST">
			<input type="hidden" name="strTxData" id="strTxData" />
		</form>
		<?php
			$strTxData = $_POST['strTxData'];
			$a_strTxData = $strTxData.explode("#", $strTxData);
			switch($a_strTxData[0]) {
			case 1:
				
				break;
			
			case 2:
			
				break;
			
			case 3:
			
				break;
			
			case 4:
			
				break;
			
			case 5:
			
				break;
			
			default:
				break;
			}
		?>
		
	</body>
</html>