<?php
	// get the data from the request
	$first_name = $_GET['first_name'];
	$last_name = $_GET['last_name'];
?>
<!DOCTYPE html>
<!DOCTYPE html>
<html>
<head>
	<title>Name Test</title>
	<link rel="stylesheet" type="text/css" href="main.css">
</head>
<body>
	<h2>Welcome</h2>
	<p>First name: <?php echo $first_name; ?></p>
	<p>Last name: <?php echo $last_name; ?></p>
</body>
</html>