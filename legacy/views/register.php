<?php
session_start();
session_destroy();
if (isset($_SESSION['username'])) {
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
				<div>APPLY<span class="blue"><strong>NOW</strong></span></div>
			</div>
			<br>
			<div class="login">
				<form method="POST" action="library/events/register.php">
				<?php
					if (isset($_SESSION['error'])) {
						echo '<span class="error"><strong>Error</strong>: ' . $_SESSION['error'] . '</span><br><br>';
						unset($_SESSION['error']);
					} elseif (isset($_SESSION['success'])) {
						echo '<span class="success"><strong>Success</strong>: ' . $_SESSION['success'] . '</span><br><br>';
						unset($_SESSION['success']);
					}
?>
                    <input id="cid" name="cid" type="text" placeholder="vatsim id" name="user" required><br><br>
                    <input id="email" name="email" type="text" placeholder="email" required><br>
					<input id="password" type="password" placeholder="password" name="password" required><br>
				<input type="submit" value="Submit">
				</form>
			</div>
	</div>
</html>
