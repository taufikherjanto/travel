<div style="margin-bottom: 20px"></div>

<?php if (Yii::app()->user->getState('role') == 2) { ?>

<section class="content">
	<div class="tab-fitur">
		<div class="container">
			<div class="row">
				<div class="col-md-3 col-sm-3 col-xs-12">
				</div>
				<div class="col-md-6 col-sm-6 col-xs-12" style="margin-top:15px;">
					<? $this->renderPartial('_menu', array('active' => 'profil')); ?>
				</div>
				<div class="col-md-3 col-sm-3 col-xs-12">

				</div>
			</div>
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="content">
						<div class="panel panel-default">
							<div class="panel-heading">
								Profil Pengguna
							</div>

							<table class="table table-responsive">
								<tbody>
									<tr>
										<td colspan=2>
											<div class="media">
			                                    <?php echo CHtml::image(Yii::app()->baseUrl."/images/user/".$model->image,'Gambar Pengguna',array("width"=>"200px", "height"=>"200px", "class"=>"media-object")); ?>
			                                </div>
			                            </td>
									</tr>
									<tr>
										<td>Nama</td>
										<td><?php echo $model->username; ?></td>
									</tr>
									<tr>
										<td>Nama Lengkap</td>
										<td><?php echo $model->nama_lengkap; ?></td>
									</tr>
									<tr>
										<td>Telepon</td>
										<td><?php echo $model->telephone; ?></td>
									</tr>
									<tr>
										<td>Email</td>
										<td><?php echo $model->email; ?></td>
									</tr>
									<tr>
										<td>Saldo</td>
										<td>Rp&nbsp;<?php echo number_format($model->saldo,0,".","."); ?></td>
									</tr>
									<tr>
										<td>&nbsp;</td>
										<td><?php echo CHtml::link('Edit Profil', array('edit_profil'), array('class'=>'btn btn-success'));?></td>
									</tr>
								</tbody>
							</table>
						</div>
					</div>

				</div>
			</div>
		</div>
	</di>
</section>

<?php } elseif (Yii::app()->user->getState('role') == 1) { ?>

<section class="content">
	<div class="tab-fitur">
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-sm-12 col-xs-12">
					<div class="content">
						<div class="panel panel-default">
							<div class="panel-heading">
								Menu
							</div>
							<div class="panel-body">
								<div class="row">
									<div class="col-md-4 text-center">
										<?php echo CHtml::link('<h1><span class="glyphicon glyphicon-th-list"></span><br>Order</h1>', array('/order/admin')); ?>
										<p>List Order</p>
									</div>
									<div class="col-md-4 text-center">
										<?php echo CHtml::link('<h1><span class="glyphicon glyphicon-user"></span><br>User</h1>', array('/user/admin')); ?>
										<p>List User</p>
									</div>
									<div class="col-md-4 text-center">
										<?php echo CHtml::link('<h1><span class="glyphicon glyphicon-th-list"></span><br>Umroh</h1>', array('/umroh/admin')); ?>
										<p>List Umroh</p>
									</div>
									<div class="col-md-4 text-center">
										<?php echo CHtml::link('<h1><span class="glyphicon glyphicon-th-list"></span><br>Travel</h1>', array('/travel/admin')); ?>
										<p>List Travel</p>
									</div>
									<div class="col-md-4 text-center">
										<?php echo CHtml::link('<h1><span class="glyphicon glyphicon-th-list"></span><br>Business</h1>', array('/business/admin')); ?>
										<p>List Business</p>
									</div>
									<div class="col-md-4 text-center">
										<?php echo CHtml::link('<h1><span class="glyphicon glyphicon-th-list"></span><br>Dauroh</h1>', array('/dauroh/admin')); ?>
										<p>List Dauroh</p>
									</div>
									<div class="col-md-4 text-center">
										<?php echo CHtml::link('<h1><span class="glyphicon glyphicon-user"></span><br>Pendamping</h1>', array('/pendamping/admin')); ?>
										<p>List User</p>
									</div>
								</div>
							</div>							
						</div>
					</div>

				</div>
			</div>
		</div>
	</di>
</section>

<?php } ?>