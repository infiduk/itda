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
		<script src="https://rawgit.com/ethereum/web3.js/develop/dist/web3.min.js"></script>
	</head>
	<body>
		<script language = "javascript">
			var Web3 = require('web3');
			var web3 = new Web3();
			web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
			var eth = web3.eth;
			var miner = web3.miner;
			
			var password = "password";
			var user_account = eth.accounts[0];
			
			web3.personal.unlockAccount(user_account, password, 1000);

			console.log(web3);
			// web3.miner.start(2);
			
			function check_work() {
				if(eth.mining) return;
				console.log("start");
				}
	</script>
	</body>
</html>