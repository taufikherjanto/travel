<?php foreach($data_travel as $data) { ?>
<div class="col-md-6 col-sm-6 col-xs-12">
	<div class="wrap">
		<div class="image-product">
			<?php echo CHtml::image(Yii::app()->baseUrl."/images/travel/".$data->gambar,'alt',array("width"=>"200px", "height"=>"200px")); ?><br>
			<p class="text-right"><?php echo $data->organizer->nama_travel_organizer;?></p>
		</div>
		<div class="content-product">
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-12" style="height: 200px;">

				</div>
				<div class="col-md-7 col-sm-7 col-xs-12">
					<h4><strong>Rp <?php echo $data->harga;?></strong></h4>
				    <p><small><strong><?php echo $data->deskripsi;?></small></p>
				    <a href="detail_produk.html" class="btn-letter">Selengkapnya</a>
					<p>&nbsp;</p>
				</div>
			</div>
		</div>
	</div>
</div>
<?php
}
?>

<div class="row">
	<div class="col-md-3 col-sm-3 col-xs-12">

	</div>
	<div class="col-md-6 col-sm-6 col-xs-12">
		<div style="display: block; margin: 0 auto; text-align: center;">
			<nav aria-label="Page navigation">
				<?php
				$this->widget('CLinkPager', array(
					'header'=>'',
					'pages'=>$pages,
     				'selectedPageCssClass'=>'active',
				    'firstPageLabel' => false,
				    'prevPageLabel' => false,
				    'nextPageLabel' => false,
				    'lastPageLabel' => false,
					'htmlOptions'=>array(
						'id'=>'pager-travel',
						'class'=>'pagination'
					),
				));
				?>
			</nav>
		</div>
	</div>
	<div class="col-md-3 col-sm-3 col-xs-12">

	</div>
</div>

<script>
	$(document).ready(function(){
		$('#pager-travel>li>a').on('click', function(){
			$('#list-item-travel').load($(this).attr('href'));
			return false;
		});
	});
</script>