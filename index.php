<?php

?>
<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>French vACC HQ</title>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/prefixfree/1.0.7/prefixfree.min.js"></script>
	<link rel="stylesheet" href="styles/css/login.css" />
	<link rel="icon" href="styles/images/favicon.ico" type="image/x-icon" />
</head>
<body>
	<div class="body"></div>
		<div class="grad"></div>
			<div class="header">
				<div>VAT<span class="blue"><strong>FRANCE</strong></span></div>
			</div>
			<br>
			<div class="login">
				<form method="POST" action="library/events/login.php">
					<input id="cid" name="cid" type="text" placeholder="username" name="user"><br>
					<input id="password" type="password" placeholder="password" name="password"><br>
				<input type="submit" value="Log In">
				</form>
			</div>
	</div>
</html>
