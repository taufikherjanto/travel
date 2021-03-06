<div class="row">
	<?php foreach($model as $data) { ?>
	<div class="col-md-6 col-sm-6 col-xs-12">
		<div class="wrap">
			<div class="image-product">
				<?php
				echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/images/travel/".$data->gambar,'alt',array("width"=>"200px", "height"=>"200px")), array('/travel/detail', 'title_slug'=>$data->title_slug), array('target'=>'_blank'));
				?>
				<?php // echo CHtml::image(Yii::app()->baseUrl."/images/travel/".$data->gambar,'alt',array("width"=>"200px", "height"=>"200px")); ?><br>
				<p class="text-right"><?php echo $data->judul;?></p>
			</div>
			<div class="content-product">
				<div class="row">
					<div class="col-md-5 col-sm-5 col-xs-12" style="height: 200px;">

					</div>
					<div class="col-md-7 col-sm-7 col-xs-12">
						<h4><strong>Rp <?php echo $data->harga;?></strong></h4>
					    <p><small><strong><?php echo $data->desc;?></small></p>
					    <?php echo CHtml::link('Selengkapnya', array('/travel/detail', 'title_slug'=>$data->title_slug), array('class'=>'detail-travel btn-letter')); ?>
						<p>&nbsp;</p>
					</div>
				</div>
			</div>
		</div>
	</div>
	<?php
	}

	if (!$model) {
		echo 'tidak ada';
	}
	?>
</div>

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

<?php
Yii::app()->clientScript->registerScript("pager-travel", <<<JS
	$(document).ready(function(){
		$('#pager-travel>li>a').on('click', function(){
			$('#list-item-travel').load($(this).attr('href'));
			return false;
		});
	});
JS
);