<!DOCTYPE html>
<html>
	<head>
		<title>Cross Site Request Forgery Protection</title>
		<link rel="stylesheet"  href="./public/styles/bootstrap.min.css">
		<link rel="stylesheet"  href="./public/styles/style.css">
	</head>
	<body>
		<form name="results">
			<div class="results">							
				<?php

					require_once 'token.php';

					$csrfTokenValue = $_POST["token"];

					if(isset($_POST['updatepost'])){
						if(token::checkToken($csrfTokenValue,$_COOKIE['csrfCookie'])){
							echo "<div><h3>Updated Successfully</h3></div>";
							echo "<div class='alert alert-secondary'>".$_POST['updatepost']."</div>";		
						}	
						else{
							echo "Error In Updating Status";
						}
					} 
				?>
			</div>					
		</form>						
		<div class="footer">
			<p>Cross Site Request Forgery Protection  |  Double Submit Cookie Pattern  |  Tharaka Liyanage  |  IT13015886</p>
		</div>
	</body> 
</html>