<!DOCTYPE html>
<html>
<head>
	<title>Basic Web Page with Vertical Bar</title>
    <script type="text/javascript" src="/static/js/crypto.js"></script>
	<link rel="stylesheet" type="text/css" href="/static/css/style.css">
</head>
<body>
	<div class="bar"></div>
    <div class="container">
        <div class="left">
            <h1>How To Pay With Crypto</h2>
            <ol>
                <li>Select A Cryptocurrency</li>
                <li>Copy the crypto address shown in the payment window</li>
                <li>Paste the address in the "send to" field in your wallet</li>
                <li>Copy the crypto amount from the payment window</li>
                <li>Paste info the "amount field" in your wallet</li>
                <li>Send the payment</li>
                <li><i>The speed of blockchain checks will </i></li>
                <li>After the transaction has been processed you will get conformation email</li>
            </ol>
        </div>
        <div class="right">
            <h1>Select A Cryptocurrency</h2>
                <form id="form" action="/processing/crypto.php" method="POST">
                    <br>
                    <input type="radio" id="item1" name="items" value="BTC">
                    <label for="item1">BTC</label>
                    <br>
                    <input type="radio" id="item2" name="items" value="ETH">
                    <label for="item2">ETH</label>
                    <br>
                    <input type="radio" id="item3" name="items" value="LTC">
                    <label for="item3">LTC</label>
                    <br>
                    <button type="submit">Submit</button>
                </form>
        </div>
    </div>
</body>
</html>
