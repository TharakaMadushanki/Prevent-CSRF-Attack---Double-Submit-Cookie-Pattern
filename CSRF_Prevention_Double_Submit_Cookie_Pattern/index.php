<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8">
		<title>Preventing Cross Site Request Forgery Attack</title>
		<link rel="stylesheet"  href="./public/styles/style.css">
	</head>
	<body>
		<div class="login">
			<h1>Login</h1>
			<form name="login" action="updateStatus.php" method="post">
				<input type="text" name="username" placeholder="Username" required="required" />
				<input type="password" name="password" placeholder="Password" required="required" />
				<button type="submit" class="btn btn-primary btn-block btn-large">Log me in</button>
			</form>
		</div>
		<div class="footer">
			<p>Cross Site Request Forgery Protection  |  Double Submit Cookie Pattern  |  Tharaka Liyanage  |  IT13015886</p>
		</div>
	</body>
</html>



