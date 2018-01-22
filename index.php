<?php
session_start();
session_destroy();
if(isset($_SESSION['username'])){
	header('Location: admin/index.php');
}
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
				<?php
					if(isset($_SESSION['noMatch'])){
						echo '<span class="error"><strong>Error</strong>: '.$_SESSION['noMatch'].'</span><br><br>';
						unset($_SESSION['noMatch']);
					} elseif(isset($_SESSION['wrongPassword'])){
						echo '<span class="error"><strong>Error</strong>: '.$_SESSION['wrongPassword'].'</span><br><br>';
						unset($_SESSION['wrongPassword']);
					}
				?>
					<input id="cid" name="cid" type="text" placeholder="username" name="user" required><br>
					<input id="password" type="password" placeholder="password" name="password" required><br>
				<input type="submit" value="Log In">
				</form>
				<a href="register.php"><input style="background-color:#919294" type="submit" value="Register"></a>
			</div>
	</div>
</html>
