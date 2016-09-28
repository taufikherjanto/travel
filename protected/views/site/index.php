<?php
/* @var $this SiteController */

$this->pageTitle=Yii::app()->name;
?>

  	<!-- Start Carousel -->
<section class="slideshow">
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
	      <img src="images/site/slide-1.png" class="img-responsive" alt="">
	      <div class="carousel-caption">
	      	<h2>Lorem Ipsum</h2>
	      	<hr style="background: #fff; width: 110px; height: 5px; margin-top: 0; margin-bottom: 0;">
	      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
	      </div>
	    </div>
	    
	    <div class="item">
	      <img src="images/site/slide-1.png" class="img-responsive" alt="">
	      <div class="carousel-caption">
	      	<h2>Lorem Ipsum</h2>
	      	<hr style="background: #fff; width: 110px; height: 5px; margin-top: 0; margin-bottom: 0;">
	      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
	      </div>
	    </div>

	    <div class="item">
	      <img src="images/site/slide-1.png" class="img-responsive" alt="">
	      <div class="carousel-caption">
	      	<h2>Lorem Ipsum</h2>
	      	<hr style="background: #fff; width: 110px; height: 5px; margin-top: 0; margin-bottom: 0;">
	      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
	      </div>
	    </div>

	    <div class="item">
	      <img src="images/site/slide-1.png" class="img-responsive" alt="">
	      <div class="carousel-caption">
	      	<h2>Lorem Ipsum</h2>
	      	<hr style="background: #fff; width: 110px; height: 5px; margin-top: 0; margin-bottom: 0;">
	      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
	      </div>
	    </div>

	    <div class="item">
	      <img src="images/site/slide-1.png" class="img-responsive" alt="">
	      <div class="carousel-caption">
	      	<h2>Lorem Ipsum</h2>
	      	<p>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat.</p>
	      </div>
	    </div>
	</div>
	<!-- Controls -->
	<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
	    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
	    <span class="sr-only">Previous</span>
	</a>
	<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
	    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
	    <span class="sr-only">Next</span>
	</a>
	</div>
</section> 	
<!-- End Carousel -->

<!-- Start Content -->
<section class="content">
	<div class="tab-fitur">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12">
					<ul class="nav nav-pills nav-justified" role="tablist">
						<li role="presentation" class="active"><a href="#umroh" aria-controls="umroh" role="tab" data-toggle="tab">Umroh</a></li>
						<li role="presentation"><a href="#travel" aria-controls="travel" role="tab" data-toggle="tab">Travel</a></li>
						<li role="presentation"><a href="#bussiness" aria-controls="bussiness" role="tab" data-toggle="tab">Bussiness</a></li>
						<li role="presentation"><a href="#dauroh" aria-controls="dauroh" role="tab" data-toggle="tab">Dauroh</a></li>
					</ul>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">

				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="tab-content">
						<div role="tabpanel" class="tab-pane active" id="umroh">
							<form class="form-group" action="produk.html">
								<div class="row">
									<div class="col-md-11 col-sm-10 col-xs-12">
										<div class="row">
											<div class="col-md-3 col-sm-3 col-xs-12">
												<label>Tanggal Berangkat</label>
												<input type="text" class="form-control" id="reservation1" placeholder="">
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
												<label>Pendamping</label>
												<div class="styled-select">
													<select class="select-service">
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Jumlah Hari Perjalanan</label>
												<div class="styled-select">
													<select class="select-service">
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Penerbangan</label>
												<div class="styled-select">
													<select class="select-service">
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-1 col-sm-2 col-xs-12">
										<button type="submit" name="submit" class="btn-cari">Cari</button>
									</div>
								</div>
							</form>
						</div>

						<div role="tabpanel" class="tab-pane" id="travel">
							<form class="form-group" action="produk.html">
								<div class="row">
									<div class="col-md-11 col-sm-10 col-xs-12">
										<div class="row">
											<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Region</label>
												<div class="styled-select">
													<select class="select-service">
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
												<label>Negara</label>
												<div class="styled-select">
													<select class="select-service">
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
												<label>Tanggal Berangkat</label>
												<input type="text" class="form-control" id="reservation2" placeholder="">
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Tema</label>
												<div class="styled-select">
													<select class="select-service">
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-1 col-sm-2 col-xs-12">
										<button type="submit" name="submit" class="btn-cari">Cari</button>
									</div>
								</div>
							</form>
						</div>

						<div role="tabpanel" class="tab-pane" id="bussiness">
							<form class="form-group" action="produk.html">
								<div class="row">
									<div class="col-md-11 col-sm-10 col-xs-12">
										<div class="row">
											<div class="col-md-3 col-sm-3 col-xs-12">
												<label>Tanggal Berangkat</label>
												<input type="text" class="form-control" id="reservation3" placeholder="">
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
												<label>Pendamping</label>
												<div class="styled-select">
													<select class="select-service">
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Paket</label>
												<div class="styled-select">
													<select class="select-service">
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Penerbangan</label>
												<div class="styled-select">
													<select class="select-service">
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
													</select>
												</div>
											</div>
										</div>
									</div>
									<div class="col-md-1 col-sm-2 col-xs-12">
										<button type="submit" name="submit" class="btn-cari">Cari</button>
									</div>
								</div>
							</form>
						</div>

						<div role="tabpanel" class="tab-pane" id="dauroh">
							<form class="form-group" action="produk.html">
								<div class="row">
									<div class="col-md-11 col-sm-10 col-xs-12">
										<div class="row">
											<div class="col-md-3 col-sm-3 col-xs-12">
												<label>Lokasi</label>
												<div class="styled-select">
													<select class="select-service">
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
												<label>Tanggal Berangkat</label>
												<input type="text" class="form-control" id="reservation4" placeholder="">
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Ustadz Pendamping</label>
												<div class="styled-select">
													<select class="select-service">
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
														<option value=""> -- Pilih --</option>
													</select>
												</div>
											</div>
											<div class="col-md-3 col-sm-3 col-xs-12">
											</div>
										</div>
									</div>
									<div class="col-md-1 col-sm-2 col-xs-12">
										<button type="submit" name="submit" class="btn-cari">Cari</button>
									</div>
								</div>
							</form>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

	<div class="populer">
		<div class="container">
			<hr style="background: #782B90; width: 40px; height: 2px; margin-top: 0; margin-bottom: 0; display: block; margin: 0 auto;">
			<h4 class="text-center">PAKET POPULER</h4>
			<p>&nbsp;</p>
			<div id="carousel-thumbnail" class="carousel slide" data-ride="carousel" data-interval="false">
	  			<div class="carousel-inner" role="listbox">
				    <div class="item active">
				    	<div class="row">
					    	<div class="col-md-1 col-sm-1">
					    		
					    	</div>
					    	<div class="col-md-10 col-sm-10">
					    		<div class="row">
					    			<div class="col-md-3 col-sm-3" style="padding: 2px;">
							    		<div class="box-populer">
					    					<img src="images/site/02_img_paket_populer_1.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
								    		<div class="order">
												<a href="#"><i class="fa fa-search"></i></a>
											</div>
							    		</div>
							    		<p style="color:#ED1C24;"><strong>Rp22.500.000</strong></p>
									    <p><small><strong>Paket Umroh Premium</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></p>
									    <a href="detail_produk.html" class="btn-konten">Selengkapnya</a>
										<p>&nbsp;</p>
							    	</div>
							    	<div class="col-md-3 col-sm-3" style="padding: 2px;">
							    		<div class="box-populer">
							    			<img src="images/site/03_img_paket_populer_2.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
								    		<div class="order">
												<a href="#"><i class="fa fa-search"></i></a>
											</div>
							    		</div>
							    		<p style="color:#ED1C24;"><strong>Rp17.500.000</strong></p>
									    <p><small><strong>Paket Travel Eropa</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></p>
									    <a href="detail_produk.html" class="btn-konten">Selengkapnya</a>
										<p>&nbsp;</p>
							    	</div>
							    	<div class="col-md-3 col-sm-3" style="padding: 2px;">
							    		<div class="box-populer">
							    			<img src="images/site/04_img_paket_populer_3.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
								    		<div class="order">
												<a href="#"><i class="fa fa-search"></i></a>
											</div>
							    		</div>
							    		<p style="color:#ED1C24;"><strong>Rp10.000.000</strong></p>
									    <p><small><strong>Paket Bisnis Deluxe</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></p>
									    <a href="detail_produk.html" class="btn-konten">Selengkapnya</a>
										<p>&nbsp;</p>
							    	</div>
							    	<div class="col-md-3 col-sm-3" style="padding: 2px;">
							    		<div class="box-populer">
								    		<img src="images/site/05_img_paket_populer_4.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
								    		<div class="order">
												<a href="#"><i class="fa fa-search"></i></a>
											</div>
							    		</div>
							    		<p style="color:#ED1C24;"><strong>Rp12.750.000</strong></p>
									    <p><small><strong>Paket Dauroh Asia</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></p>
									    <a href="detail_produk.html" class="btn-konten">Selengkapnya</a>
										<p>&nbsp;</p>
							    	</div>
					    		</div>
					    	</div>
					    	<div class="col-md-1 col-sm-1">

					    	</div>
				    	</div>
				    </div>
				    
				    <div class="item">
				      	<div class="row">
					    	<div class="col-md-1 col-sm-1">
					    		
					    	</div>
					    	<div class="col-md-10 col-sm-10">
					    		<div class="row">
					    			<div class="col-md-3 col-sm-3" style="padding: 2px;">
							    		<div class="box-populer">
					    					<img src="images/site/02_img_paket_populer_1.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
								    		<div class="order">
												<a href="#"><i class="fa fa-search"></i></a>
											</div>
							    		</div>
							    		<p style="color:#ED1C24;"><strong>Rp22.500.000</strong></p>
									    <p><small><strong>Paket Umroh Premium</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></p>
									    <a href="detail_produk.html" class="btn-konten">Selengkapnya</a>
										<p>&nbsp;</p>
							    	</div>
							    	<div class="col-md-3 col-sm-3" style="padding: 2px;">
							    		<div class="box-populer">
							    			<img src="images/site/03_img_paket_populer_2.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
								    		<div class="order">
												<a href="#"><i class="fa fa-search"></i></a>
											</div>
							    		</div>
							    		<p style="color:#ED1C24;"><strong>Rp17.500.000</strong></p>
									    <p><small><strong>Paket Travel Eropa</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></p>
									    <a href="detail_produk.html" class="btn-konten">Selengkapnya</a>
										<p>&nbsp;</p>
							    	</div>
							    	<div class="col-md-3 col-sm-3" style="padding: 2px;">
							    		<div class="box-populer">
							    			<img src="images/site/04_img_paket_populer_3.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
								    		<div class="order">
												<a href="#"><i class="fa fa-search"></i></a>
											</div>
							    		</div>
							    		<p style="color:#ED1C24;"><strong>Rp10.000.000</strong></p>
									    <p><small><strong>Paket Bisnis Deluxe</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></p>
									    <a href="detail_produk.html" class="btn-konten">Selengkapnya</a>
										<p>&nbsp;</p>
							    	</div>
							    	<div class="col-md-3 col-sm-3" style="padding: 2px;">
							    		<div class="box-populer">
							    			<img src="images/site/05_img_paket_populer_4.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
								    		<div class="order">
												<a href="#"><i class="fa fa-search"></i></a>
											</div>
							    		</div>
							    		<p style="color:#ED1C24;"><strong>Rp12.750.000</strong></p>
									    <p><small><strong>Paket Dauroh Asia</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></p>
									    <a href="detail_produk.html" class="btn-konten">Selengkapnya</a>
										<p>&nbsp;</p>
							    	</div>
					    		</div>
					    	</div>
					    	<div class="col-md-1 col-sm-1">

					    	</div>
				    	</div>
				    </div>
				</div>
				<!-- Controls -->
				<a class="left carousel-control" href="#carousel-thumbnail" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-thumbnail" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a>
	  		</div>
		</div>
	</div>

	<div class="promo">
		<div class="container">
			<hr style="background: #782B90; width: 40px; height: 2px; margin-top: 0; margin-bottom: 0; display: block; margin: 0 auto;">
			<h4 class="text-center">PAKET PROMO</h4>
			<p>&nbsp;</p>
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-12" style="padding: 2px;">
					<div style="width: 100%; height: 240px; overflow: hidden;" class="box-promo">
						<div class="order">
							<a href="#" class="btn-promo">Pesan Sekarang</a>
						</div>
						<img src="images/site/06_img_paket_promo_1.png" style="position: relative; top: -35%; left: 0; margin-left: -18%;" alt="...">
						<div class="description">
							<strong><h4>Diskon</h4>
							<h1>20%</h1>
							<h4>Paket Umroh</h4>
							<p>Periode September 2016</p></strong>
						</div>
					</div>
				</div>
				<div class="col-md-7 col-sm-7 col-xs-12">
					<div class="row">
						<div class="col-md-5 col-sm-5 col-xs-12" style="padding: 2px;">
							<div style="width: 100%; height: 240px; overflow: hidden;" class="box-promo">
								<div class="order">
										<a href="#" class="btn-promo">Pesan Sekarang</a>
								</div>
								<img src="images/site/07_img_paket_promo_2.png" style="position: relative; top: -20%; left: 0; margin-left: -20%;" alt="...">
								<div class="description">
									<strong><h4>Diskon</h4>
									<h1>10%</h1>
									<h4>Bussiness Trip</h4>
									<p>Singapoer dan Malaysia</p></strong>
								</div>
							</div>
						</div>
						<div class="col-md-7 col-sm-7 col-xs-12">
							<div class="row">
								<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 2px;">
									<div style="width: 100%; height: 118px; overflow: hidden;" class="box-promos">
										<div class="order">
											<a href="#" class="btn-promo">Pesan Sekarang</a>
										</div>
										<img src="images/site/08_img_paket_promo_3.png" style="position: relative; top: 0; left: 0; margin-left: -10%;" alt="...">
										<div class="description">
											<strong><p><small>Hemat</small></p>
											<h4>Rp500.000</h4>
											<p><small>Paket Dauroh Brunei<br>
											Periode 1-15 September 2016</small></p></strong>
										</div>
									</div>
								</div>
								<div class="col-md-12 col-sm-12 col-xs-12" style="padding: 2px;">
									<div style="width: 100%; height: 118px; overflow: hidden;" class="box-promos">
										<div class="order">
											<a href="#" class="btn-promo">Pesan Sekarang</a>
										</div>
										<img src="images/site/09_img_paket_promo_4.png" style="position: relative; top: 0; left: 0; margin-left: -10%;" alt="...">
										<div class="description">
											<strong><p><small>Hanya</small></p>
											<h4>45.5Jt</h4>
											<p><small>Paket paris-Jerman Barokah<br>
											Periode 1-10 Oktober 2016<small></p></strong>
										</div>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="text-center" style="margin-top: 50px;"> <a href="#" class="btn-promo">Lihat Semua</a></div>
		</div>
	</div>

	<div class="service">
		<div class="container">
			<hr style="background: #782B90; width: 40px; height: 2px; margin-top: 0; margin-bottom: 0; display: block; margin: 0 auto;">
			<h4 class="text-center">MENGAPA PILIH KAMI?</h4>
			<p>&nbsp;</p>
			<div class="row">
				<div class="col-md-3 col-sm-3">
					<img src="images/site/01_ic_MPK_1.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 20px;" alt="...">
					<h5 class="text-center"><strong>Jaminan 100%<br>Aman</strong></h5>
					<p class="text-center"><small>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></p>
				</div>

				<div class="col-md-3 col-sm-3">
					<img src="images/site/02_ic_MPK_2.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 20px;" alt="...">
					<h5 class="text-center"><strong>Customer Suport<br>yang Responsif</strong></h5>
					<p class="text-center"><small>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></p>
				</div>

				<div class="col-md-3 col-sm-3">
					<img src="images/site/03_ic_MPK_3.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 20px;" alt="...">
					<h5 class="text-center"><strong>Kemudahan <br>Pembayaran</strong></h5>
					<p class="text-center"><small>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></p>
				</div>

				<div class="col-md-3 col-sm-3">
					<img src="images/site/04_ic_MPK_4.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 20px;" alt="...">
					<h5 class="text-center"><strong>Kemudahan<br>Akses Mobile</strong></h5>
					<p class="text-center"><small>Lorem ipsum dolor sit amet, consectetuer adipiscing elit.</small></p>
				</div>
			</div>
		</div>
	</div>

	<div class="mitra">
		<div class="container">
			<hr style="background: #782B90; width: 40px; height: 2px; margin-top: 0; margin-bottom: 0; display: block; margin: 0 auto;">
			<h4 class="text-center">MITRA</h4>
			<p>&nbsp;</p>
			<div id="carousel-mitra" class="carousel slide" data-ride="carousel">
	  			<div class="carousel-inner" role="listbox">
				    <div class="item active">
				    	<div class="row">
					    	<div class="col-md-1 col-sm-1">
					    		
					    	</div>
					    	<div class="col-md-10 col-sm-10">
					    		<div class="row">
					    			<div class="col-md-3 col-sm-3">
					    				<img src="images/site/10_img_telkomsel.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
							    	</div>
							    	<div class="col-md-3 col-sm-3">
							    		<img src="images/site/11_img_garuda.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
							    	</div>
							    	<div class="col-md-3 col-sm-3">
							    		<img src="images/site/12_img_jasmine.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
							    	</div>
							    	<div class="col-md-3 col-sm-3">
							    		<img src="images/site/13_img_qatarairways.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
							    	</div>
					    		</div>
					    	</div>
					    	<div class="col-md-1 col-sm-1">

					    	</div>
				    	</div>
				    </div>
				    
				    <div class="item">
				      	<div class="row">
					    	<div class="col-md-1 col-sm-1">
					    		
					    	</div>
					    	<div class="col-md-10 col-sm-10">
					    		<div class="row">
					    			<div class="col-md-3 col-sm-3">
					    				<img src="images/site/10_img_telkomsel.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
							    	</div>
							    	<div class="col-md-3 col-sm-3">
							    		<img src="images/site/11_img_garuda.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
							    	</div>
							    	<div class="col-md-3 col-sm-3">
							    		<img src="images/site/12_img_jasmine.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
							    	</div>
							    	<div class="col-md-3 col-sm-3">
							    		<img src="images/site/13_img_qatarairways.png" class="img-responsive" style="display: block; margin: 0 auto; margin-bottom: 10px;" alt="...">
							    	</div>
					    		</div>
					    	</div>
					    	<div class="col-md-1 col-sm-1">

					    	</div>
				    	</div>
				    </div>
				</div>
				<!-- Controls
				<a class="left carousel-control" href="#carousel-mitra" role="button" data-slide="prev">
				    <span class="glyphicon glyphicon-menu-left" aria-hidden="true"></span>
				    <span class="sr-only">Previous</span>
				</a>
				<a class="right carousel-control" href="#carousel-mitra" role="button" data-slide="next">
				    <span class="glyphicon glyphicon-menu-right" aria-hidden="true"></span>
				    <span class="sr-only">Next</span>
				</a> -->
	  		</div>
			<div class="text-center" style="margin-top: 50px;margin-bottom: 50px;"> <a href="#" class="btn-promo">Lihat Semua</a></div>
			<hr style="background: #ccc; height: 1px;">
			<h4 class="text-center" style="color: #333;margin-top: 50px; ">Ingin Menjadi bagian dari <strong>JalanHalal.com</strong> <a href="#" class="btn-promo">Daftar Sekarang</a></h4>
		</div>
	</div>
</section>
	<!-- End Content -->
