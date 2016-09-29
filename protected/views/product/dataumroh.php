<?php foreach($model as $data) { ?>
<div class="col-md-6 col-sm-6 col-xs-12">
	<div class="wrap">
		<div class="image-product">
			<?php
			echo CHtml::link(CHtml::image(Yii::app()->baseUrl."/images/umroh/".$data->gambar,'alt',array("width"=>"200px", "height"=>"200px")), array('/umroh/detail', 'title_slug'=>$data->title_slug), array('target'=>'_blank'));
			?>
			<?php // echo CHtml::image(Yii::app()->baseUrl."/images/umroh/".$data->gambar,'alt',array("width"=>"200px", "height"=>"200px")); ?><br>
			<p class="text-right"><?php echo $data->judul;?></p>
		</div>
		<div class="content-product">
			<div class="row">
				<div class="col-md-5 col-sm-5 col-xs-12" style="height: 200px;">

				</div>
				<div class="col-md-7 col-sm-7 col-xs-12">
					<h4><strong>Rp <?php echo $data->harga;?></strong></h4>
				    <p><small><strong><?php echo $data->desc;?></small></p>
				    <?php echo CHtml::link('Selengkapnya', array('/umroh/detail', 'title_slug'=>$data->title_slug), array('class'=>'detail-umroh btn-letter')); ?>
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
						'id'=>'pager-umroh',
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
Yii::app()->clientScript->registerScript("pager-umroh", <<<JS
	$(document).ready(function(){
		$('#pager-umroh>li>a').on('click', function(){
			$('#list-item-umroh').load($(this).attr('href'));
			return false;
		});
	});
JS
);