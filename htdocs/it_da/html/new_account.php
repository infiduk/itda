<html>
<head>
<!-- web3 -->
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/2.1.0/jquery.min.js"></script>
	<script type="text/javascript" src="./js/bignumber.min.js"></script>
	<script type="text/javascript" src="./js/crypto-js.js"></script>
	<script type="text/javascript" src="./js/utf8.js"></script>
	<script type="text/javascript" src="./js/web3.js"></script>
	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
</head>
<body>
<script language = "javascript">
		var Web3 = require('web3');
        var web3 = new Web3();
		
		web3 = new Web3(new Web3.providers.HttpProvider("http://192.168.0.25:8545"));
		var newAccount = web3.personal.newAccount('password');
</script>
</body>
</html>