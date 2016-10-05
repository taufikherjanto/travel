<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title><?php echo CHtml::encode($this->pageTitle); ?></title>
    <meta name="description" content="">
    <meta name="keywords" content="">
    <meta name="resource-type" content="document" />
    <meta http-equiv="content-type" content="text/html; charset=US-ASCII" />
    <meta http-equiv="content-language" content="en-us" />


    <!-- Bootstrap -->
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/bootstrap.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/style.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/font.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/css/font-awesome.min.css" rel="stylesheet">
    <link href="<?php echo Yii::app()->request->baseUrl;?>/plugins/datepicker/datepicker3.css" rel="stylesheet" type="text/css" />
	<?php Yii::app()->clientScript->registerCoreScript('jquery'); ?>
	<script>
		jQuery.ajaxSetup({async:true});
    	$.ajaxPrefilter(function( options, originalOptions, jqXHR ) {
		    options.async = true;
		});
	</script>
  </head>
  <body>
  	<!-- Start Header -->
  	<header>
  		<!-- Navigasi -->

  		<div class="navbar-fixed-top">
	  		<div class="top-header">
		  		<div class="container">
			  		<div class="pull-right">
			  			<a href="signup.html" class="btn-daftar">Daftar</a> <a href="login.html" class="btn-masuk">Masuk</a>
			  			<div style="float: right; margin-top: 7px; margin-right: 10px;"><a href="">English</a> | <a href="">Indonesia</a></div>
			  		</div>
		  		</div>
	  		</div>
	  		<div class="bottom-header">
	  			<div class="navbar navbar-default">
		  			<div class="container">
					  	<div class="navbar-header">
					  		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
						        <span class="sr-only">Toggle navigation</span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						        <span class="icon-bar"></span>
						    </button>
						    <a href="#" class="navbar-brand"><span style="font-size: 25px; text-decoration: none; color:#5A4DA1; text-decoration:bold;">Jalan</span><span style="font-size: 25px; text-decoration: none; color:#39B77D; text-decoration:bold;">Halal</span><span style="font-size: 25px; text-decoration: none; color:#5A4DA1;text-decoration:bold;">.com</span></a>
					  	</div>
					  	<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
					  		<ul class="nav navbar-nav navbar-right">
					  			<li><?php echo CHtml::link('Home', array('/site'));?></li>
					  			<li><?php echo CHtml::link('Produk', array('/product'));?></li>
					  			<li><?php echo CHtml::link('Mitra', array('/organizer'));?></a></li>
					  			<li><?php echo CHtml::link('Tentang Kami', array('/site/about'));?></a></li>
					  			<li><?php echo Chtml::link('Kontak', array('/site/contact'));?></a></li>
					  			<li><a href="#">Karir</a></li>
					  			<li><a href="#">FAQ</a></li>
					  		</ul>
					  	</div>
				  	</div>
				</div>
	  		</div>
  		</div>

  		<!-- Navigasi -->

	  	<!-- Start Carousel -->
	  	<!-- <section class="slideshow">
	  		<div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
	  			<ol class="carousel-indicators hidden-sm hidden-xs">
	  				<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
	  				<li data-target="#carousel-example-generic" data-slide-to="1"></li>
	  				<li data-target="#carousel-example-generic" data-slide-to="2"></li>
	  				<li data-target="#carousel-example-generic" data-slide-to="3"></li>
	  				<li data-target="#carousel-example-generic" data-slide-to="4"></li>
	  			</ol>
	  			<div class="carousel-inner" role="listbox">
				    <div class="bg-transparant"></div>
				    <div class="item active">
				      <img src="<?php echo Yii::app()->request->baseUrl;?>/images/site/slide-1.png" class="img-responsive" alt="">
				      <div class="carousel-caption">
				      	<h2>Lorem Ipsum</h2>
				      	<hr style="background: #fff; width: 110px; height: 5px; margin-top: 0; margin-bottom: 0;">
				      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				      </div>
				    </div>
				    
				    <div class="item">
				      <img src="<?php echo Yii::app()->request->baseUrl;?>/images/site/slide-1.png" class="img-responsive" alt="">
				      <div class="carousel-caption">
				      	<h2>Lorem Ipsum</h2>
				      	<hr style="background: #fff; width: 110px; height: 5px; margin-top: 0; margin-bottom: 0;">
				      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="<?php echo Yii::app()->request->baseUrl;?>/images/site/slide-1.png" class="img-responsive" alt="">
				      <div class="carousel-caption">
				      	<h2>Lorem Ipsum</h2>
				      	<hr style="background: #fff; width: 110px; height: 5px; margin-top: 0; margin-bottom: 0;">
				      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="<?php echo Yii::app()->request->baseUrl;?>/images/site/slide-1.png" class="img-responsive" alt="">
				      <div class="carousel-caption">
				      	<h2>Lorem Ipsum</h2>
				      	<hr style="background: #fff; width: 110px; height: 5px; margin-top: 0; margin-bottom: 0;">
				      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				      </div>
				    </div>

				    <div class="item">
				      <img src="<?php echo Yii::app()->request->baseUrl;?>/images/site/slide-1.png" class="img-responsive" alt="">
				      <div class="carousel-caption">
				      	<h2>Lorem Ipsum</h2>
				      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
				      </div>
				    </div>
				</div>
				<!-- Controls
				<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
	  		</div>
	  	</section> 	 -->
	  	<!-- End Carousel -->
  	</header>

  	<!-- Start Content -->
  	<section class="content">
		<div class="tab-fitur">
			<div class="container">
				<div class="row">
			<?php echo $content; ?>
				</div>
			</div>
		</div>
	</section>
  	<!-- End Content -->

  	<!-- Footer -->

  	<footer>
	  	<div class="top-footer">
	  		<div class="container">
		  		<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-md-4 col-sm-4 col-xs-12">
								<ul class="list-unstyled">
									<li><a href="#">Home</a></li>
									<li><a href="#">Produk</a></li>
									<li><a href="#">Mitra</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<ul class="list-unstyled">
									<li><a href="#">Tentang</a></li>
									<li><a href="#">Kontak</a></li>
									<li><a href="#">karir</a></li>
								</ul>
							</div>
							<div class="col-md-4 col-sm-4 col-xs-12">
								<ul class="list-unstyled">
									<li><a href="#">FAQ</a></li>
									<li><a href="#">Term & Condition</a></li>
									<li><a href="#">Privacy Policy</a></li>
								</ul>
							</div>
						</div>
					</div>
					<div class="col-md-6 col-sm-6 col-xs-12">
						<div class="row">
							<div class="col-md-5 col-sm-5 col-xs-12">
								<strong>Follow Us</strong><br>
								<a href="#" style="float: left; margin: 2px;"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/site/05_ic_facebook.png" style="width: 30px; height: 30px;"></a>
								<a href="#" style="float: left; margin: 2px;"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/site/06_ic_twitter.png" style="width: 30px; height: 30px;"></a>
								<a href="#" style="float: left; margin: 2px;"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/site/07_ic_instagram.png" style="width: 30px; height: 30px;"></a>
								<a href="#" style="float: left; margin: 2px;"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/site/08_ic_gplus.png" style="width: 30px; height: 30px;"></a>
								<a href="#" style="float: left; margin: 2px;"><img src="<?php echo Yii::app()->request->baseUrl;?>/images/site/09_ic_youtube.png" style="width: 30px; height: 30px;"></a>
								<p>&nbsp;</p>
							</div>
							<div class="col-md-7 col-sm-7 col-xs-12">
								<strong>Newsletter!</strong>
								<p><small>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod.</small></p>
								<form class="form-group">
									<div class="row">
										<div class="col-md-9 col-sm-8 col-xs-8">
											<input type="text" class="form-control" placeholder="Alamat email Anda">
										</div>
										<div class="col-md-3 col-sm-4 col-xs-4">
											<button type="submit" class="btn-letter">Kirim</button>
										</div>
									</div>
								</form>
								<p>&nbsp;</p>
							</div>
						</div>
					</div>
				</div>
			</div>
	  	</div>
		<div class="bottom-footer">
			<div class="container" style="position;center; margin-top: 5px;">
				<h5 align="center">Copyright 2016 Jalan Halal.</h5>
			</div>
		</div>
  	</footer>

  	<!-- End Footer -->
    <script src="<?php echo Yii::app()->request->baseUrl;?>/js/bootstrap.min.js"></script>
    <script src="<?php echo Yii::app()->request->baseUrl;?>/plugins/datepicker/bootstrap-datepicker.js"></script>
    <script>
    	$(document).ready(function() {
		    function toggleNavbarMethod() {
		        if ($(window).width() > 768) {
		            $('.navbar .dropdown').on('mouseover', function(){
		                $('.dropdown-toggle', this).trigger('click');
		            }).on('mouseout', function(){
		                $('.dropdown-toggle', this).trigger('click').blur();
		            });
		        }
		        else {
		            $('.navbar .dropdown').off('mouseover').off('mouseout');
		        }
		    }
		    toggleNavbarMethod();
		    $(window).resize(toggleNavbarMethod);
		});
    </script>
    <script type="text/javascript">
    	$('#reservation1').datepicker({format: 'yyyy-mm-dd'});
    	$('#reservation2').datepicker({format: 'yyyy-mm-dd'});
    	$('#reservation3').datepicker({format: 'yyyy-mm-dd'});
    	$('#reservation4').datepicker({format: 'yyyy-mm-dd'});
    </script>
  </body>
</html>