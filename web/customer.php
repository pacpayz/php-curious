<!DOCTYPE html>
<html>
<head>
	<title>PacPayz</title>
	<link rel="stylesheet" type="text/css" href="/static/css/style.css">
	<script type="text/javascript" src="/static/js/index.js"></script>
</head>
<body>
	<div class="bar"></div>
	<div class="container">
	  <div class="left">
	    <img src="logo.png" alt="Logo">
	    <h1>Please Complete The Form</h1>
	  </div>
	  <div class="right">
	  <form id="form" action="../processing/customer.php" method="POST">
	      <label for="email">Email</label>
	      <input type="email" id="email" name="email" required>

	      <label for="firstName">First name</label>
	      <input type="text" id="firstName" name="firstName" required>

	      <label for="lastName">Last name</label>
	      <input type="text" id="lastName" name="lastName" required>

	      <label for="phoneNumber">Phone number</label>
	      <input type="tel" id="phoneNumber" name="phoneNumber" required>

	      <label for="billingAddress">Billing address</label>
	      <input type="text" id="billingAddress" name="billingAddress" required>

	      <button type="submit">Submit</button>
	    </form>
	  </div>
	</div>
</body>
</html>