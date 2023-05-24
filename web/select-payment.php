<!DOCTYPE html>
<html>
<head>
	<title>Basic Web Page with Vertical Bar</title>
    <script type="text/javascript" src="/static/js/select_payment.js"></script>
	<link rel="stylesheet" type="text/css" href="/static/css/style.css">
</head>
<body>
	<div class="bar"></div>
    <div class="container">
        <div class="left">
            <h1>Select A Payment Method</h1>
            <h2>Supported Cryptocurrencies</h2>
            <ul>
                <li>BTC</li>
                <li>ETH</li>
            </ul>
            <h2>Supported Cards</h2>
            <ul>
                <li>Visa</li>
                <li>Mastercard</li>
                <li>Amex</li>
            </ul>
            <h2>Supported 3rd Parties</h2>
            <ul>
                <li>Paypal</li>
                <li>Apple Pay</li>
                <li>Google Pay</li>
            </ul>
        </div>
        <div class="right">
            <h1>Payment Information</h1>
            <form id="form" action="../processing/select-payment.php" method="POST">
                <label for="paymentMethod">Payment Method</label>
                <select id="paymentMethod" name="paymentMethod">
                    <option value="crypto">Crypto</option>
                    <option value="card">Card</option>
                    <option value="other">3rd Party</option>
                </select>
                <button type="submit">Submit</button>
            </form>
        </div>
    </div>
</body>
</html>
