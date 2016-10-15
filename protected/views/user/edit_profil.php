<div style="margin-bottom: 20px"></div>
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
									Edit Profil Pengguna
								</div>
								<div class="panel-body">
									<?php $this->renderPartial('_form_edit_profil', array('model'=>$model)); ?>
								</div>
							</div>
						</div>

					</div>
				</div>
			</div>
		</di>
	</section>