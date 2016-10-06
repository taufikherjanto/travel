<section style="margin-top: 5%;">
	<div class="container">
	    <div class="row">
	        <div class="col-md-6">
				<?php $form=$this->beginWidget('CActiveForm', array(
				    'id'=>'transaksi-confirm-form',
				    // Please note: When you enable ajax validation, make sure the corresponding
				    // controller action is handling ajax validation correctly.
				    // See class documentation of CActiveForm for details on this,
				    // you need to use the performAjaxValidation()-method described there.
				    'enableAjaxValidation'=>false,
				    'htmlOptions' => array(
				        'enctype' => 'multipart/form-data',
				        'class'=>'form-horizontal'
				    ),
				)); ?>
					
				    <h3 class="nomargin">
	                    Konfirmasi Pembayaran
	                </h3>

				    <?php echo $form->errorSummary($model); ?>

				    <div class="row form-group">
        				<p><span class="tebal reda">Upload bukti pembayaran anda di bawah ini. (jpg/png)</span></p>
				        <?php echo $form->fileField($model,'gambar', array('class'=>'form-control')); ?>
				    </div>
					<div class="row form-group">
						<p>
							<ul>
								<li>Pembayaran yang telah dibayarkan oleh pihak pembeli akan di proses dalam wakti 1x24 jam untuk proses selanjutnya yang nanti pembeli dapat memilih menu status pembelian pada navigasi diatas.</li>
								<li>Donatur yang sudah mengkonfirmasi pembayaran tidak diizinkan untuk membatalkan pembiayaan .</li>
								<li>Untuk pelayanan costumer service dapat membuka halaman ini</li>
	        				</ul>
        				</p>
					</div>
				    <div class="row form-group">
				        <?php echo CHtml::submitButton('Submit', array('class'=>'btn btn-success')); ?>
				    </div>

				<?php $this->endWidget(); ?>
			</div><!-- form -->
		</div>
	</div>
</section>