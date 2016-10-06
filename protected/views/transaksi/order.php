<?php
/* @var $this TransaksiController */
/* @var $model OrderMaster */

$this->breadcrumbs=array(
	'Order Masters'=>array('index'),
	'Create',
);

$this->menu=array(
	array('label'=>'List OrderMaster', 'url'=>array('index')),
	array('label'=>'Manage OrderMaster', 'url'=>array('admin')),
);
?>

<section style="margin-top: 5%;">
	<div class="signuppanel">
	    <div class="row">
	        <div class="col-md-6">
	            <?php
	            $form=$this->beginWidget('CActiveForm', array(
					'id'=>'order-master-form',
					// Please note: When you enable ajax validation, make sure the corresponding
					// controller action is handling ajax validation correctly.
					// There is a call to performAjaxValidation() commented in generated controller code.
					// See class documentation of CActiveForm for details on this.
					'enableAjaxValidation'=>false,
				));
				?>
	                <h3 class="nomargin">
	                    Data Pemesan
	                </h3>
	                <p class="mt5 mb20">
	                </p>
	                <?php echo $form->errorSummary(array($model, $user_ref)); ?>
	                <label class="control-label">
	                    Nama
	                </label>
	                <div class="row mb10">
	                    <div class="col-sm-12">
	                        <?php echo $form->textField($user_ref,'nama_ref',array('class'=>'form-control', 'value'=>$user->nama_lengkap)); ?>
	                    </div>
	                </div>
	                <div class="mb10">
	                    <label class="control-label">
	                        Nomor Telpon
	                    </label>
	                    <?php echo $form->textField($user_ref,'tel_ref',array('class'=>'form-control','value'=>$user->telephone)); ?>
	                </div>
	                <div class="mb10">
	                    <label class="control-label">
	                        Pembayaran
	                    </label>
						<?php
						$payment = CHtml::listData(Payment::model()->findAll(),
    						'id',
    						'type'
    					);
    					echo $form->dropDownList(
    						$model,	'id_type_payment',
    						$payment, 
    						array(
    							'empty'=>'Jenis Pembayaran...',
    							'class'=>'select2-2',
    						)		
    					);?>
	                </div>
	                <div class="mb10">
	                    <label class="control-label">
	                        Alamat
	                    </label>
	                    <?php echo $form->textArea($user_ref, 'alamat_ref', array('class'=>'form-control')); ?>
	                </div>
	                <br/>
	                <?php echo CHtml::submitButton('Order', array('class'=>'btn btn-success btn-block')); ?>
	            </form>
	        </div>
	        <!-- col-sm-6 -->
	        <div class="col-md-5">
	            <form action="" method="post">
	                <div class="signup-info">
	                    <div class="row">
	                        <div class="media">
	                        	<?php echo CHtml::image(Yii::app()->baseUrl."/images/".$jenis."/".$produk->gambar,'alt',array("width"=>"200px", "height"=>"200px", "class"=>"media-object")); ?>
	                        </div>
	                    </div>
	                    <div class="row">
	                        <div class="table-responsive">
	                            <table class="table mb30">
	                                <thead>
	                                    <tr>
	                                        <th><?php echo $produk->judul; ?></th>
	                                    </tr>
	                                </thead>
	                                <tbody>
	                                	<tr>
											<td>Produk</td>
											<td><?php echo ucwords($jenis);?></td>
	                                	</tr>
	                                    <tr>
	                                        <td>Harga</td>
	                                        <td>Rp <?php echo number_format($produk->harga,0,".","."); ?>,00</td>
	                                    </tr>
	                                    <tr>
											<td>Jadwal Berangkat</td>
											<td><?php echo isset($produk->tanggal) ? $produk->tanggal : $produk->tanggal_event; ?></td>
	                                    </tr>
	                                    <tr>
	                                        <td>Kuota</td>
	                                        <td><?php echo $produk->quota; ?></td>
	                                    </tr>
	                                </tbody>
	                            </table>
	                        </div>
	                        <!-- table-responsive -->
	                    </div>
	                    <h4 class="mb20"></h4>
	                </div>
	            <?php $this->endWidget(); ?>
	        </div>
	    </div>
	</div>
</section>

<script>
    jQuery(document).ready(function(){
        
        jQuery(".select2").select2({
            width: '100%',
            minimumResultsForSearch: -1
        });
        
        jQuery(".select2-2").select2({
            width: '100%'
        });
    });
</script>