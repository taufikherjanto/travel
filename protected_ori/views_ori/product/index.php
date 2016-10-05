<?php
/* @var $this ProductController */
/* @var $dataProvider CActiveDataProvider */

$this->breadcrumbs=array(
	'Product',
);

$this->menu=array(
	array('label'=>'Create Travel', 'url'=>array('create')),
	array('label'=>'Manage Travel', 'url'=>array('admin')),
);
?>

<div style="margin-bottom: 60px"></div>
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
						<form class="form-group">
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
						<div class="content-tab">
							<div class="tab-filter">
								<div class="navbar navbar-inverse">
									<div class="navbar-header">
							  		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								        <span class="sr-only">Toggle navigation</span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								    </button>
								    <div class="navbar-brand">Filter :</div>
							  	</div>
							  	<ul class="nav navbar-nav">
										<li><a href="#baru" class="active">Terbaru</a></li>
										<li><a href="#murah">Termurah</a></li>
										<li><a href="#mahal">Termahal</a></li>
										<li><a href="#populer">Terpopuler</a></li>
									</ul>
								</div>
							</div>
							<div class="tab-description">
								<hr style="background: #782B90; width: 40px; height: 2px; margin-top: 0; margin-bottom: 0; display: block; margin: 0 auto;">
								<h4 class="text-center">Umroh</h4>
								<p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
								<p>&nbsp;</p>

								<div class="row">
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="wrap">
											<div class="image-product">
												<img src="images/site/umroh/01_img_umroh_1.png" style="width: 200px; height: 200px;"><br>
												<p class="text-right">KhadijahTravel</p>
											</div>
											<div class="content-product">
												<div class="row">
													<div class="col-md-5 col-sm-5 col-xs-12" style="height: 200px;">

													</div>
													<div class="col-md-7 col-sm-7 col-xs-12">
														<h4><strong>Rp12.750.000</strong></h4>
													    <p><small><strong>Paket Bisnis Asia 1</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</small></p>
													    <a href="detail_produk.html" class="btn-letter">Selengkapnya</a>
														<p>&nbsp;</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="wrap">
											<div class="image-product">
												<img src="images/site/umroh/02_img_umroh_2.png" style="width: 200px; height: 200px;"><br>
												<p class="text-right">KhadijahTravel</p>
											</div>
											<div class="content-product">
												<div class="row">
													<div class="col-md-5 col-sm-5 col-xs-12" style="height: 200px;">

													</div>
													<div class="col-md-7 col-sm-7 col-xs-12">
														<h4><strong>Rp17.400.000</strong></h4>
													    <p><small><strong>Paket Bisnis Keluarga</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</small></p>
													    <a href="detail_produk.html" class="btn-letter">Selengkapnya</a>
														<p>&nbsp;</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="wrap">
											<div class="image-product">
												<img src="images/site/umroh/03_img_umroh_3.png" style="width: 200px; height: 200px;"><br>
												<p class="text-right">KhadijahTravel</p>
											</div>
											<div class="content-product">
												<div class="row">
													<div class="col-md-5 col-sm-5 col-xs-12" style="height: 200px;">

													</div>
													<div class="col-md-7 col-sm-7 col-xs-12">
														<h4><strong>Rp17.600.000</strong></h4>
													    <p><small><strong>Paket Bisnis Afrika</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</small></p>
													    <a href="detail_produk.html" class="btn-letter">Selengkapnya</a>
														<p>&nbsp;</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6 col- sm-6 col-xs-12">
										<div class="wrap">
											<div class="image-product">
												<img src="images/site/umroh/04_img_umroh_4.png" style="width: 200px; height: 200px;"><br>
												<p class="text-right">KhadijahTravel</p>
											</div>
											<div class="content-product">
												<div class="row">
													<div class="col-md-5 col-sm-5 col-xs-12" style="height: 200px;">

													</div>
													<div class="col-md-7 col-sm-7 col-xs-12">
														<h4><strong>Rp23.350.000</strong></h4>
													    <p><small><strong>Paket Bisnis Gold</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</small></p>
													    <a href="detail_produk.html" class="btn-letter">Selengkapnya</a>
														<p>&nbsp;</p>
													</div>
												</div>
											</div>
										</div>
									</div>

									<div class="col-md-6 col-sm-6 col-xs-12">
										<div class="wrap">
											<div class="image-product">
												<img src="images/site/umroh/05_img_umroh_5.png" style="width: 200px; height: 200px;"><br>
												<p class="text-right">KhadijahTravel</p>
											</div>
											<div class="content-product">
												<div class="row">
													<div class="col-md-5 col-sm-5 col-xs-12" style="height: 200px;">

													</div>
													<div class="col-md-7 col-sm-7 col-xs-12">
														<h4><strong>Rp14.150.000</strong></h4>
													    <p><small><strong>Paket Bisnis Reguler</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</small></p>
													    <a href="detail_produk.html" class="btn-letter">Selengkapnya</a>
														<p>&nbsp;</p>
													</div>
												</div>
											</div>
										</div>
									</div>
									
									<div class="col-md-6 col-sm-6 col-xs-12" class="wrap">
										<div class="wrap">
											<div class="image-product">
												<img src="images/site/umroh/06_img_umroh_6.png" style="width: 200px; height: 200px;"><br>
												<p class="text-right">KhadijahTravel</p>
											</div>
											<div class="content-product">
												<div class="row">
													<div class="col-md-5 col-sm-5 col-xs-12" style="height: 200px;">

													</div>
													<div class="col-md-7 col-sm-7 col-xs-12">
														<h4><strong>Rp17.300.000</strong></h4>
													    <p><small><strong>Paket Bisnis Eropa 1</strong><br>Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt.</small></p>
													    <a href="detail_produk.html" class="btn-letter">Selengkapnya</a>
														<p>&nbsp;</p>
													</div>
												</div>
											</div>
										</div>
									</div>
								</div>

								<div class="row">
									<div class="col-md-3 col-sm-3 col-xs-12">

									</div>
									<div class="col-md-6 col-sm-6 col-xs-12">
										<div style="display: block; margin: 0 auto; text-align: center; ">
											<nav aria-label="Page navigation">
											  <ul class="pagination">
											    <li><a href="#">1</a></li>
											    <li><a href="#">2</a></li>
											    <li><a href="#">3</a></li>
											    <li><a href="#">4</a></li>
											    <li><a href="#">5</a></li>
											  </ul>
											</nav>
										</div>
									</div>
									<div class="col-md-3 col-sm-3 col-xs-12">

									</div>
								</div>
							</div>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="travel">
						<form class="form-group">
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
						<div class="content-tab">
							<div class="tab-filter">
								<div class="navbar navbar-inverse">
									<div class="navbar-header">
							  		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								        <span class="sr-only">Toggle navigation</span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								    </button>
								    <div class="navbar-brand">Filter :</div>
							  	</div>
							  	<ul class="nav navbar-nav">
										<li><a href="#baru" class="active">Terbaru</a></li>
										<li><a href="#murah">Termurah</a></li>
										<li><a href="#mahal">Termahal</a></li>
										<li><a href="#populer">Terpopuler</a></li>
									</ul>
								</div>
							</div>
							<div class="tab-description">
								<hr style="background: #782B90; width: 40px; height: 2px; margin-top: 0; margin-bottom: 0; display: block; margin: 0 auto;">
								<h4 class="text-center">TRAVEL</h4>
								<p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
								<p>&nbsp;</p>
								<div class="row" id="list-item-travel">

								</div>
							</div>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="bussiness">
						<form class="form-group">
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
						<div class="content-tab">
							<div class="tab-filter">
								<div class="navbar navbar-inverse">
									<div class="navbar-header">
							  		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								        <span class="sr-only">Toggle navigation</span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								    </button>
								    <div class="navbar-brand">Filter :</div>
							  	</div>
							  	<ul class="nav navbar-nav">
										<li><a href="#baru" class="active">Terbaru</a></li>
										<li><a href="#murah">Termurah</a></li>
										<li><a href="#mahal">Termahal</a></li>
										<li><a href="#populer">Terpopuler</a></li>
									</ul>
								</div>
							</div>
							<div class="tab-description">
								<hr style="background: #782B90; width: 40px; height: 2px; margin-top: 0; margin-bottom: 0; display: block; margin: 0 auto;">
								<h4 class="text-center">Bussiness</h4>
								<p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
								<p>&nbsp;</p>
								<div class="row" id="list-item-business">

								</div>
							</div>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="dauroh">
						<form class="form-group">
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
						<div class="content-tab">
							<div class="tab-filter">
								<div class="navbar navbar-inverse">
									<div class="navbar-header">
							  		<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
								        <span class="sr-only">Toggle navigation</span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								        <span class="icon-bar"></span>
								    </button>
								    <div class="navbar-brand">Filter :</div>
							  	</div>
							  	<ul class="nav navbar-nav">
										<li><a href="#baru" class="active">Terbaru</a></li>
										<li><a href="#murah">Termurah</a></li>
										<li><a href="#mahal">Termahal</a></li>
										<li><a href="#populer">Terpopuler</a></li>
									</ul>
								</div>
							</div>
							<div class="tab-description">
								<hr style="background: #782B90; width: 40px; height: 2px; margin-top: 0; margin-bottom: 0; display: block; margin: 0 auto;">
								<h4 class="text-center">DAUROH</h4>
								<p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
								<p>&nbsp;</p>
								<div class="row" id="list-item-dauroh">

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<script>
$(document).ready(function(){
	$('#list-item-travel').load('<?php echo Yii::app()->request->baseUrl;?>/product/datatravel');
	$('#list-item-business').load('<?php echo Yii::app()->request->baseUrl;?>/product/databusiness');
	$('#list-item-dauroh').load('<?php echo Yii::app()->request->baseUrl;?>/product/datadauroh');
});
</script>

<?php
/*
Yii::app()->clientScript->registerScript("load-list-item-travel", <<<JS
	$(document).ready(function(){
		$('#list-item-travel').load('<?php echo Yii::app()->request->baseUrl;?>/product/datatravel');
	});
JS
);

Yii::app()->clientScript->registerScript("load-list-item-business", <<<JS
	$(document).ready(function(){
		$('#list-item-business').load('<?php echo Yii::app()->request->baseUrl;?>/product/databusiness');
	});
JS
);