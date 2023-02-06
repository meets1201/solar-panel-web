<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="solar panel.css">
	<title>sign up page</title>
</head>
<body>
	<form method="post">
		<div class="login">
		<h1 align="center">Sign Up</h1>
		<label>User name</label>
		<input type="text" name="user name" placeholder="enter user name" required><br>
		<label>Email</label>
		<input type="email" name="email" placeholder="enter email" required><br>
		<label>Mobile no.</label>
		<input type="mobile number" name="mobile no." maxlength="10" placeholder="enter mobile no." required><br>
		<label>Password</label>
		<input type="password" name="pwd" placeholder="creat your password" required><br>
		<p>did you have any account?<a href="Login.php">Login</a></p>
		<input type="submit" name="btn_submit" value="sign up"/>
		</div>
	</form>
</body>
</html>