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
						<form class="form-group" id="form-umroh">
							<div class="row">
								<div class="col-md-11 col-sm-10 col-xs-12">
									<div class="row">
										<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Tanggal Berangkat</label>
											<?php echo CHtml::textField('tanggal','',array(
														   'class'=>'form-control',
														   'id'=>'reservation1',
														   'placeholder'=>''
											)); ?>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Pendamping</label>
											<div class="styled-select">
												<?php
												$pendamping = CHtml::listData(Pendamping::model()->findAll(),
                            						'id',
                            						'nama_pendamping'
                            					);
                            					echo CHtml::dropDownList(
                            						'id_pendamping',
                            						'',
                            						$pendamping, 
                            						array(
                            							'empty'=>'--Pilih--',
                            							'class'=>'select-service',
                            							'id'=>'umroh-id_pendamping',
                            						)		
                            					);?>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12">
										<label>Jumlah Hari Perjalanan</label>
											<div class="styled-select">
												<?php echo CHtml::textField('jumlah_hari','',array(
														   'class'=>'form-control',
														   'id'=>'umroh-jumlah_hari',
														   'placeholder'=>''
												)); ?>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12">
										<label>Penerbangan</label>
											<div class="styled-select">
												<?php
												$penerbangan = CHtml::listData(Penerbangan::model()->findAll(),
                            						'id',
                            						'nama_penerbangan'
                            					);
                            					echo CHtml::dropDownList(
                            						'id_penerbangan',
                            						'',
                            						$penerbangan, 
                            						array(
                            							'empty'=>'--Pilih--',
                            							'class'=>'select-service',
                            							'id'=>'umroh-id_penerbangan',
                            						)		
                            					);?>
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
							  	<ul class="nav navbar-nav" id="filter-umroh">
										<li><a id="baru" href="#baru" class="active">Terbaru</a></li>
										<li><a id="murah" href="#murah">Termurah</a></li>
										<li><a id="mahal" href="#mahal">Termahal</a></li>
										<li><a id="populer" href="#populer">Terpopuler</a></li>
									</ul>
								</div>
							</div>
							<div class="tab-description">
								<hr style="background: #782B90; width: 40px; height: 2px; margin-top: 0; margin-bottom: 0; display: block; margin: 0 auto;">
								<h4 class="text-center">Umroh</h4>
								<p class="text-center">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolore magna aliquam erat volutpat. Ut wisi enim ad minim veniam, quis nostrud exerci tation ullamcorper suscipit lobortis nisl ut aliquip ex ea commodo consequat. Duis autem vel eum iriure dolor in hendrerit in vulputate velit esse molestie consequat, vel illum dolore eu feugiat nulla facilisis at vero eros et accumsan et iusto odio dignissim qui blandit praesent luptatum zzril delenit augue duis dolore te feugait nulla facilisi.</p>
								<p>&nbsp;</p>

								<div class="row" id="list-item-umroh">

								</div>
							</div>
						</div>
					</div>

					<div role="tabpanel" class="tab-pane" id="travel">
						<form class="form-group" id="form-travel">
							<div class="row">
								<div class="col-md-11 col-sm-10 col-xs-12">
									<div class="row">
										<div class="col-md-3 col-sm-3 col-xs-12">
										<label>Region</label>
											<div class="styled-select">
												<?php
												$region = CHtml::listData(Region::model()->findAll(),
                            						'id',
                            						'nama_region'
                            					);
                            					echo CHtml::dropDownList(
                            						'id_region',
                            						'',
                            						$region, 
                            						array(
                            							'empty'=>'--Pilih--',
                            							'class'=>'select-service',
                            							'id'=>'travel-id_region',
                            						)		
                            					);?>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Negara</label>
											<div class="styled-select">
												<?php
												$negara = CHtml::listData(Negara::model()->findAll(),
                            						'id',
                            						'nama_negara'
                            					);
                            					echo CHtml::dropDownList(
                            						'id_negara',
                            						'',
                            						$negara, 
                            						array(
                            							'empty'=>'--Pilih--',
                            							'class'=>'select-service',
                            							'id'=>'travel-id_negara',
                            						)		
                            					);?>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Tanggal Berangkat</label>
											<?php echo CHtml::textField('tanggal','',array(
														   'class'=>'form-control',
														   'id'=>'reservation2',
														   'placeholder'=>''
											)); ?>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12">
										<label>Tema</label>
											<div class="styled-select">
												<?php echo CHtml::textField('tema','',array(
														   'class'=>'form-control',
														   'id'=>'travel-tema',
														   'placeholder'=>''
												)); ?>
											</div>
										</div>
									</div>
								</div>
								<div class="col-md-1 col-sm-2 col-xs-12">
									<button id="travel-search" name="submit" class="btn-cari">Cari</button>
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
							  	<ul class="nav navbar-nav" id="filter-travel">
										<li><a id="baru" href="#baru" class="active">Terbaru</a></li>
										<li><a id="murah" href="#murah">Termurah</a></li>
										<li><a id="mahal" href="#mahal">Termahal</a></li>
										<li><a id="populer" href="#populer">Terpopuler</a></li>
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
						<form class="form-group" id="form-business">
							<div class="row">
								<div class="col-md-11 col-sm-10 col-xs-12">
									<div class="row">
										<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Tanggal Berangkat</label>
											<?php echo CHtml::textField('tanggal','',array(
														   'class'=>'form-control',
														   'id'=>'reservation3',
														   'placeholder'=>''
											)); ?>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Pendamping</label>
											<div class="styled-select">
												<?php
												$pendamping = CHtml::listData(Pendamping::model()->findAll(),
                            						'id',
                            						'nama_pendamping'
                            					);
                            					echo CHtml::dropDownList(
                            						'id_pendamping',
                            						'',
                            						$pendamping, 
                            						array(
                            							'empty'=>'--Pilih--',
                            							'class'=>'select-service',
                            							'id'=>'business-id_pendamping',
                            						)		
                            					);?>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12">
										<label>Paket</label>
											<div class="styled-select">
												<?php echo CHtml::textField('paket','',array(
														   'class'=>'form-control',
														   'id'=>'business-paket',
														   'placeholder'=>''
												)); ?>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12">
										<label>Penerbangan</label>
											<div class="styled-select">
												<?php
												$penerbangan = CHtml::listData(Penerbangan::model()->findAll(),
                            						'id',
                            						'nama_penerbangan'
                            					);
                            					echo CHtml::dropDownList(
                            						'id_penerbangan',
                            						'',
                            						$penerbangan, 
                            						array(
                            							'empty'=>'--Pilih--',
                            							'class'=>'select-service',
                            							'id'=>'business-id_penerbangan',
                            						)		
                            					);?>
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
							  	<ul class="nav navbar-nav" id="filter-business">
										<li><a id="baru" href="#baru" class="active">Terbaru</a></li>
										<li><a id="murah" href="#murah">Termurah</a></li>
										<li><a id="mahal" href="#mahal">Termahal</a></li>
										<li><a id="populer" href="#populer">Terpopuler</a></li>
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
						<form class="form-group" id="form-dauroh">
							<div class="row">
								<div class="col-md-11 col-sm-10 col-xs-12">
									<div class="row">
										<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Lokasi</label>
											<div class="styled-select">
												<?php echo CHtml::textField('lokasi','',array(
														   'class'=>'form-control',
														   'id'=>'dauroh-lokasi',
														   'placeholder'=>''
											)); ?>
											</div>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12">
											<label>Tanggal Berangkat</label>
											<?php echo CHtml::textField('tanggal','',array(
														   'class'=>'form-control',
														   'id'=>'reservation4',
														   'placeholder'=>''
											)); ?>
										</div>
										<div class="col-md-3 col-sm-3 col-xs-12">
										<label>Ustadz Pendamping</label>
											<div class="styled-select">
												<?php
												$pendamping = CHtml::listData(Pendamping::model()->findAll(),
                            						'id',
                            						'nama_pendamping'
                            					);
                            					echo CHtml::dropDownList(
                            						'id_pendamping',
                            						'',
                            						$pendamping, 
                            						array(
                            							'empty'=>'--Pilih--',
                            							'class'=>'select-service',
                            							'id'=>'dauroh-id_pendamping',
                            						)		
                            					);?>
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
							  	<ul class="nav navbar-nav" id="filter-dauroh">
										<li><a id="baru" href="#baru" class="active">Terbaru</a></li>
										<li><a id="murah" href="#murah">Termurah</a></li>
										<li><a id="mahal" href="#mahal">Termahal</a></li>
										<li><a id="populer" href="#populer">Terpopuler</a></li>
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
	$('#list-item-umroh').load('<?php echo Yii::app()->request->baseUrl;?>/product/dataumroh');
	$('#list-item-travel').load('<?php echo Yii::app()->request->baseUrl;?>/product/datatravel');
	$('#list-item-business').load('<?php echo Yii::app()->request->baseUrl;?>/product/databusiness');
	$('#list-item-dauroh').load('<?php echo Yii::app()->request->baseUrl;?>/product/datadauroh');

	// search by ajax
	$('#form-umroh').submit(function(e){
		event.preventDefault();
		parameter_data = $(this).serialize();
		$('#list-item-umroh').load('<?php echo Yii::app()->request->baseUrl;?>/product/dataumroh?'+parameter_data);
	});
	$('#form-travel').submit(function(e){
		event.preventDefault();
		parameter_data = $(this).serialize();
		$('#list-item-travel').load('<?php echo Yii::app()->request->baseUrl;?>/product/datatravel?'+parameter_data);
	});
	$('#form-business').submit(function(e){
		event.preventDefault();
		parameter_data = $(this).serialize();
		$('#list-item-business').load('<?php echo Yii::app()->request->baseUrl;?>/product/databusiness?'+parameter_data);
	});
	$('#form-dauroh').submit(function(e){
		event.preventDefault();
		parameter_data = $(this).serialize();
		$('#list-item-dauroh').load('<?php echo Yii::app()->request->baseUrl;?>/product/datadauroh?'+parameter_data);
	});

	// sorting by ajax
	$("#filter-umroh li").on('click','a',function(e) {
	    e.preventDefault();
	    value_form = $("#form-umroh").serialize();
	    sort = '&sort=' + $(this).attr('id');
	    parameter_data = value_form+sort;
	    $('#list-item-umroh').empty();
	    $('#list-item-umroh').load('<?php echo Yii::app()->request->baseUrl;?>/product/dataumroh?'+parameter_data);
	});

	$("#filter-travel li").on('click','a',function(e) {
	    e.preventDefault();
	    value_form = $("#form-travel").serialize();
	    sort = '&sort=' + $(this).attr('id');
	    parameter_data = value_form+sort;
	    $('#list-item-travel').empty();
	    url = '<?php echo Yii::app()->request->baseUrl;?>/product/datatravel?'+parameter_data;
	    $('#list-item-travel').load(url);
	    console.log(url);
	});

	$("#filter-business li").on('click','a',function(e) {
	    e.preventDefault();
	    value_form = $("#form-business").serialize();
	    sort = '&sort=' + $(this).attr('id');
	    parameter_data = value_form+sort;
	    $('#list-item-business').empty();
	    $('#list-item-business').load('<?php echo Yii::app()->request->baseUrl;?>/product/databusiness?'+parameter_data);
	});

	$("#filter-dauroh li").on('click','a',function(e) {
	    e.preventDefault();
	    value_form = $("#form-dauroh").serialize();
	    sort = '&sort=' + $(this).attr('id');
	    parameter_data = value_form+sort;
	    $('#list-item-dauroh').empty();
	    $('#list-item-dauroh').load('<?php echo Yii::app()->request->baseUrl;?>/product/datadauroh?'+parameter_data);
	});
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
*/