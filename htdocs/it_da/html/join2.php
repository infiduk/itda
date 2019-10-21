<!DOCTYPE html>
<html>
<head>
<title>잇(it)다♥</title>
<!-- web3 -->
	<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="./js/bignumber.min.js"></script>
	<script type="text/javascript" src="./js/crypto-js.js"></script>
	<script type="text/javascript" src="./js/utf8.js"></script>
	<script type="text/javascript" src="./js/web3.js"></script>	
</head>		
<body>
<script language = "javascript">
		var Web3 = require('web3');
        var web3 = new Web3();
		
		web3 = new Web3(new Web3.providers.HttpProvider("http://localhost:8545"));
        console.log(web3);		

		var accounts = web3.eth.accounts;  //account 정보 가져오기
		var from_account = accounts[130];
		console.log("2: " + from_account);

		var to_account = accounts[1];
		console.log("3: " + to_account)

		var transactionObj = { //transaction object 설정
			from: "0x9017ef52438b2111c05f754d543de120fb2eb0b3",
			to: "0xf57e176612d48870efccf8eee1d2dec78dca9aee",
			value: '0x10',
			as : '0x18',
			gasPrice : '0x10'
		};

		web3.personal.unlockAccount(from_account, "password", 10);
		web3.eth.sendTransaction({from: "0x9017ef52438b2111c05f754d543de120fb2eb0b3",
			to: "0xf57e176612d48870efccf8eee1d2dec78dca9aee",
			value: '0x10',
			as : '0x18',
			gasPrice : '0x10'});

</script>
</body>
</html>