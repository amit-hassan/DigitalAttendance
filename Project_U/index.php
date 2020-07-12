<!DOCTYPE HTML>
<html>
<head>
<?php
	session_start();
	session_destroy();

?>
<title>Sign-In</title>
<link rel="stylesheet" type="text/css" href="style.css">
</head>
<!-- <body id="body-color"> -->
<body background="bg.jpg">
<div id="Sign-In">
	<p align="Center"><font size="5" padding=20px>Welcome to Login Page</font></p>
<fieldset style="width:30%"><legend>Log-In Here</legend>
<form method="POST" action="check.php">
Authorized ID <br><input type="text" name="id" size="40"><br>
Password <br><input type="password" name="pass" size="40"><br>
<input id="button" type="submit" name="submit" value="Log-In">

</form>

</fieldset>
<p align="Center">Developed by &copyTeam_BlackDragon</p>
</div>
</body>
</html>