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
var newAccount = web3.personal.newAccount("1234");
</script>
</body>
</html>