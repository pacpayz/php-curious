<!DOCTYPE html>
<html>
<head>
	<title>Basic Web Page with Vertical Bar</title>
    <link rel="stylesheet" type="text/css" href="/static/css/style.css">
	<link rel="stylesheet" type="text/css" href="/static/css/3rd.css">
</head>
<body>
	<div class="bar"></div>
    <div class="container">
        <div class="left">
            <h1>Select A Vendor To Complete Transaction</h2>
        </div>
        <div class="right">
            <h1>Available Vendors</h2>
            <form id="form" method="post" action="/processing/3rd.php">
                <a href="google_pay.php">
                    <img class="vendor_logo" src="/static/imgs/3rd/google.png" alt="Google Pay">
                </a>
                <a href="apple_pay.php">
                    <img class="vendor_logo" src="/static/imgs/3rd/apple.png" alt="Apple Pay">
                </a>
                <a href="paypal.php">
                    <img class="vendor_logo" src="/static/imgs/3rd/paypal.png" alt="PayPal">
                </a>
            </form>
        </div>
    </div>
</body>
</html>
