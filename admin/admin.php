<?php
	include('login.php'); // Memasuk-kan skrip Login 	 
	if(isset($_SESSION['login_user'])){
	header("location: home.php");
}
?>
 <head>
	<link rel="stylesheet" href="css/bootstrap.css"/>
    <link rel="stylesheet" href="css/bootstrap.min.css"/>
	<link rel="stylesheet" href="css/style.css"/>
 </head>
 <body style="color:black" class="text-center">
		<div class="col-lg-4">
		</div>
		<div class="col-lg-4 outter-form-login">
		  <form action="" class="inner-login" method="post">	
				<h3 class="title-login">SISTEM INFORMASI DOKTER</h3>
				<h4 class="title-login">Login Admin</h4>
				
				<div class="form-group">
					<input id="name" class="form-control" name="username" placeholder="username" type="text">
				</div>
					
				<div class="form-group">
					<input id="password" class="form-control" name="password" placeholder="**********" type="password">
				</div>
				
				<input type="submit" name="submit" class="btn btn-block btn-custom-green" id="submit" value="Login">
		  </form>
		</div>
		<div class="col-lg-4"></div>
 </body>