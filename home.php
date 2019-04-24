<?php
include('template.php');
//include('session.php'); bila ingin redirect harus login dlu
?>
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
	<link href="css/bootstrap.min.css" rel="stylesheet" type="text/css">

    <!-- Custom CSS -->
    <link href="css/modern-business.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
	</head>
<body>
	 <header id="myCarousel" class="carousel slide">
        <!-- Indicators -->
        <ol class="carousel-indicators">
            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
            <li data-target="#myCarousel" data-slide-to="1"></li>
            <li data-target="#myCarousel" data-slide-to="2"></li>
        </ol>

        <!-- Wrapper for slides -->
        <div class="carousel-inner">
            <div class="item active">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide One');"></div>
                <div class="carousel-caption">
                    <h2>Caption 1</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Two');"></div>
                <div class="carousel-caption">
                    <h2>Caption 2</h2>
                </div>
            </div>
            <div class="item">
                <div class="fill" style="background-image:url('http://placehold.it/1900x1080&text=Slide Three');"></div>
                <div class="carousel-caption">
                    <h2>Caption 3</h2>
                </div>
            </div>
        </div>
		
		
        <!-- Controls -->
        <a class="left carousel-control" href="#myCarousel" data-slide="prev">
            <span class="icon-prev"></span>
        </a>
        <a class="right carousel-control" href="#myCarousel" data-slide="next">
            <span class="icon-next"></span>
        </a>
    </header>
	<div class="container">
		<br>
		<section>
			<div class="row">
			<div class="col-md-8 container">  
			<br><br>
				<div class="row">  
					<!--/span-->  
					<div class="col-md-10">  
							<!--letak konten-->  
						<?php  
						 if(empty($_GET['link']))  
								 include "lihatberita.php";  
						 else  
						  include($_GET['link']);     
						 ?>  
					</div>  
				</div><!--/row--> 
			</div>
			<div class="col-md-4">
					<div class="well">
						<h4>Blog Search</h4>
						<div class="input-group">
							<input type="text" class="form-control">
							<span class="input-group-btn">
								<button class="btn btn-default" type="button"><i class="fa fa-search"></i></button>
							</span>
						</div>
						<!-- /.input-group -->
					</div>
					<div class="well">
						<h4>Kategori</h4>                        
								<ul class="list-unstyled">
								  <li><?php include("menuberita.php");?>
							
									</li>
								</ul>
					</div>
			</div>
		</section>
		<br>
					
		<div class="row">
		  <div class="col-lg-12">
			<hr>
			<footer>
			 <p>&copy; 2017 by <a href="#">SISTEM INFORMASI GEOGRAFIS</a></p>
			</footer>
		  </div>
		</div>
	</div>
 </div>
	  <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

    <!-- Script to Activate the Carousel -->
    <script>
    $('.carousel').carousel({
        interval: 5000 //changes the speed
    })
    </script>
  </body>
</html>

	
