<!doctype HTML>
<html>
	<head>
		<meta charset="utf-8">
		<title>Login</title>
		<?php
			session_start();
			session_destroy();

		?>
		<link rel="stylesheet" href="style2.css">
	</head>
	<body>
		<div class="box">
			<h2>Login</h2>
					<form method="POST" action="check.php">
						<div class="inputBox">
							<input type="text" name="id" size="40" required="">
							<label>Authorized ID</label>
						</div>
						<div class="inputBox">
							<input type="password" name="pass" size="40" required="">
							<label>Password</label>
						</div>
						<input type="submit" name="submit" value="Log-In">

					</form>




		</div>
	</body>

</html>