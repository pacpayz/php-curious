<?php
// Delay for 1 second before redirecting to customer.php
// System checks will be placed here in the future.
header('Refresh: 1; URL=./web/customer.php');
?>

<!DOCTYPE html>
<html>
<head>
	<title>Loading...</title>
	<link rel="stylesheet" type="text/css" href="/static/css/style.css">
</head>
<body>
	<div class="container">
	  <h1>Loading...</h1>
	  <p>Please wait for a moment.</p>
	</div>
</body>
</html>
