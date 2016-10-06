<section style="margin-top: 70px;">
	<div class="container">
	    <div class="row">
	        <div class="col-md-12">
	        	<?php if(Yii::app()->user->hasFlash('berhasil')):?>
				    <div class="alert alert-success alert-dismissible" role="alert">
						<button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">&times;</span></button>
						<strong>Berhasil !</strong> <?php echo Yii::app()->user->getFlash('berhasil'); ?>.
					</div>
				<?php endif; ?>
				<h1 class="text-center " >Terimakasih sudah mengkonfirmasikan pembayaran anda</h1>
                    <h3 class="text-center " style="margin-bottom:20px;">Harap anda menunggu dari pihak admin jalanhalal untuk mengkonfirmasikan bukti pembayaran anda 1x24 jam.</h3>
        		 	<br>
		</div>
	</div>
</section>