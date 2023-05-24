<!DOCTYPE html>
<html>
<head>
	<title>Basic Web Page with Vertical Bar</title>
    <script type="text/javascript" src="/static/js/card.js"></script>
	<link rel="stylesheet" type="text/css" href="/static/css/style.css">
</head>
<body>
	<div class="bar"></div>
    <div class="container">
        <div class="left">
            <h1>Please Enter The Required Information</h2>
        </div>
        <div class="right">
            <h1>Payment Information</h2>
            <form id="form" action="/processing/card.php" method="POST">
                <label for="cardNumber">Card Number</label>
                <input type="text" id="cardNumber" name="cardNumber" required>

                <label for="cardHolder">Card Holder</label>
                <input type="text" id="cardHolder" name="cardHolder" required>

                <label for="expiryDate">Expiry Date</label>
                <input type="text" id="expiryDate" name="expiryDate" required>

                <label for="cvv">CVV</label>
                <input type="text" id="cvv" name="cvv" required>
                
                <button type="submit">Submit Payment</button>
            </form>
        </div>
    </div>
</body>
</html>
