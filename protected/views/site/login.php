<br><br><br><br><br><br>
<section>
  
    <div class="signinpanel">
        
        <div class="row">
            
            <div class="col-md-7">
                
                <div class="signin-info">
                    <div class="logopanel">
                        <h1><a href="index.html" style="color:#272727; text-decoration:none;"><span>Jalan</span>Halal.com <span></span></a></h1>
                    </div><!-- logopanel -->
                
                    <div class="mb20"></div>
                
                    <h5><strong>Mengapa Jadi Member JalanHalal?!</strong></h5>
                    <ul>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Jaminan Harga Terbaik</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Diskon Eksklusif via Email</li>
                        <li><i class="fa fa-arrow-circle-o-right mr5"></i> Atur Pemesanan dan Ajukan Refund dari Semua Perangkat</li>
                    </ul>
                    <div class="mb20"></div>
                    <strong>Ingin menjadi member? <a href="signup.html">Daftar</a></strong>
                </div><!-- signin0-info -->
            
            </div>
            
            
            <div class="col-md-5">
                
               <?php $form=$this->beginWidget('CActiveForm', array(
					'id'=>'login-form',
					'enableClientValidation'=>true,
					'clientOptions'=>array(
						'validateOnSubmit'=>true,
					),
				)); ?>
                    <h4 class="nomargin">Login</h4>
                    <p class="mt5 mb20">Login dengan akun anda.</p>
                
                    <?php echo $form->labelEx($model,'username'); ?>
					<?php echo $form->textField($model,'username',array('class'=>'form-control')); ?>
					<?php echo $form->error($model,'username'); ?>
					<br>
                    <?php echo $form->labelEx($model,'password'); ?>
					<?php echo $form->passwordField($model,'password',array('class'=>'form-control')); ?>
					<?php echo $form->error($model,'password'); ?>
					<br>
                    <a href="#"><small>Lupa password?</small></a>
                    <button class="btn btn-success btn-block">Login</button>
                    
               <?php $this->endWidget(); ?>
            </div><!-- col-sm-5 -->
            
        </div><!-- row -->
        
        <div class="signup-footer">
            <div class="pull-left">
                &copy; 2016. All Rights Reserved. JalanHalal.com
            </div>
            <div class="pull-right">
                Created By: <a href="" target="_blank"></a>
            </div>
        </div>
        
    </div><!-- signin -->
  
</section>