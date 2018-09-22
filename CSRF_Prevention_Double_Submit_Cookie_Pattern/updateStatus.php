<?php


if(isset($_POST['username'],$_POST['password'])){
	$uname = $_POST['username'];
	$pwd = $_POST['password'];
	if($uname == 'admin' && $pwd == 'admin'){
		echo 'You have Successfully Logged in';
		session_start();
		$_SESSION['token'] = base64_encode(openssl_random_pseudo_bytes(32));
		$session_id = session_id();
		setcookie('sessionCookie',$session_id,time()+60*60*24*365,'/');
		setcookie('csrfCookie',$_SESSION['token'],time()+60*60*24*365,'/');
		
	}
	else{
		echo 'Incorrect username or password';
		exit();
	}	
}

<!DOCTYPE html>
<html>
	<head>
		<title>Cross Site Request Forgery Protection</title>
		<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
		<link rel="stylesheet"  href="./public/styles/style.css">
		<script>
	
			$(document).ready(function(){
	
				var name = "csrfCookie" + "=";
				var csrf_cookie_value = "";
				var decoded_csrf_cookie = decodeURIComponent(document.cookie);
				var dcs = decoded_csrf_cookie.split(';');
			
				for(var i = 0; i <dcs.length; i++) {
					var dc = dcs[i];
					while (dc.charAt(0) == ' ') {
						dc = dc.substring(1);
					}
			
					if (dc.indexOf(name) == 0) {
						cookie_value = dc.substring(name.length, dc.length);
						document.getElementById("csrf_token_to_be_generated").setAttribute('value', cookie_value) ;
					}
				}	
			});		
		</script>	
	</head>
	<body>
		<form name="updateStatus" action="results.php" method="post">
			<div class="status">
				<h2>Update Your Status</h2>			
				<textarea rows="10" placeholder="Write here" name="updatepost"></textarea>
				<input type="submit" value="Update" class="btn btn-primary btn-block btn-large">
				<div id="csrfTokenDiv">
					<input type="hidden" name="token" value="" id="csrf_token_to_be_generated"/>
				</div>
			</div>					
		</form>						
		<div class="footer">
			<p>Cross Site Request Forgery Protection  |  Double Submit Cookie Pattern  |  Tharaka Liyanage  |  IT13015886</p>
		</div>
	</body> 
</html>
