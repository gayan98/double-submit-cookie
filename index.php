<html>
	<head>
		<title>CSRF protection by Double submit cookie</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
	</head>
	<body>
		<div class="container">

		  	<h2 align="center">Login</h2>
		  	<form action ='index.php' method='POST' enctype='multipart/form-data'>
		    	<div class="form-group">
		      		<label for="username">Username:</label>
		      		<input type="text" class="form-control" id="username" name="username" placeholder="Enter username">
		    	</div>
		    	<div class="form-group">
		      		<label for="password">Password:</label>
		      		<input type="password" class="form-control" id="password" name="password" placeholder="Enter password">
		    	</div>
		    	<div align="center">
				<button type="submit" class="btn btn-default" id="submit" name="submit" >Login</button>
				</div>
		  	</form>
		</div>
	</body>
</html>



<?php
    if(isset($_POST['submit'])) {
      user_login();
    }
?>

<?php
	
	function user_login()
	{	
		if(isset($_POST['username'],$_POST['password'])){
			$username = $_POST['username'];
			$password = $_POST['password'];
			if($username == 'admin' && $password == '1234'){
				echo '<h3>Successfully logged in</h3>';
				//genarate set session cookie and csrfTokenCookie
				session_start();

				$_SESSION['token'] = md5(uniqid(rand(), TRUE));
				$sessionID = session_id();
				setcookie('sessionCookie',$sessionID,time()+ 60*60*24*365 ,'/');
				setcookie('csrfTokenCookie',$_SESSION['token'],time()+ 60*60*24*365 ,'/');
				header('Location:addinfo.php');
			}
			else{
				echo '<h3>Invalid Credentials</h3>';
				exit();
			}
		}

	}



?>
