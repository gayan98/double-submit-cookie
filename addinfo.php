<html>
	<head>
		<title>Adding Info</title>
		<meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">
		
		<link rel="stylesheet" href="public/css/bootstrap.min.css">
        <script src="public/js/jquery.min.js"></script>
        <script src="public/js/bootstrap.min.js"></script>
	</head>
	<body>
		<?php
            if(!isset($_COOKIE['sessionCookie'])) {
				  echo "<h3>Error. Please login again!!!</h3><br>
				  <a href='index.php' class='button'>
				  	<button type='submit' class='btn btn-warning' id='dsc' name='dsc'> Login </button>
				  </a>";
            }
        ?>

        <script>
			
			$(document).ready(function()
			{	
				var cookie_value = "";
				var dCookie = decodeURIComponent(document.cookie);
				var csrfC = dCookie.split(';')[2]
				if(csrfC.split('=')[0] = "csrfTokenCookie" )
				{
					cookie_value = csrfC.split('csrfTokenCookie=')[1];
					document.getElementById("token_value").setAttribute('value', cookie_value) ;
				}
			});

        </script>

		<?php
			if(isset($_COOKIE['sessionCookie'])) {
               	echo "<div class='container'>

			         <div class='row' align='center' style='padding-top: 100px;'>
			         	<div class='col-12'>
			 				<div class='card'>
			               		<h4>Add Name</h4>
			               		<div class='card-body'>
			                     	<div class='row'>
			                         <div class='col-sm-2'></div>
			                         	<div class='col-sm-8'>
											<form method='post' action='validation.php' onsubmit='submitForm(this);'>
												<input type='hidden' name='token' id='token_value' value=''>
													<div class='form-group row'>
														<label for='name' class='col-sm-2 col-form-label'>Full Name</label>
														<div class='col-sm-10'>
															<input type='text' class='form-control' id='name' name='name' placeholder='Name' required>
														</div>
													</div>
												<button type='submit' class='btn btn-primary' >Submit</button>
												
											</form>
        	 						    </div>
        	 						</div>
        	 					</div>
        	 				</div>
        				</div>
        	 		</div>
					 <div class='row' align='center' style='padding-top: 30px;'>
					 	<a href='logout.php' class='button'><button type='submit' class='btn btn-warning' id='dsc' name='dsc'> Logout </button></a>
				 	</div>
				
				 </div>";
			 }
			
			
        ?>
      	<script src="/public/js/bootstrap.min.js"></script>
        <script src="/public/js/popper.min.js"></script>
	</body>
</html>
