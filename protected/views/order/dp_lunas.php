<div style="margin-bottom: 20px"></div>
<section class="content">
		<div class="tab-fitur">
			<div class="container">
				<div class="row">
					<div class="col-md-12 col-sm-12 col-xs-12">
						<div class="content">
							<div class="panel panel-default">
								<div class="panel-heading">
									<?php echo CHtml::link("&laquo; Kembali", array('/order/admin'));?> | DP Lunas
								</div>
								<table class="table table-responsive">
									<thead>
										<tr>
											<th>#</th>
											<th>Nama Pelanggan</th>
											<th>Nama Travel</th>
											<th>Kode Verifikasi</th>
											<th>Tipe Payment</th>
											<th>Biaya</th>
											<th>Bayar</th>
											<th>Status Pembayaran</th>
											<th>Status Konfirmasi</th>
											<th>Tanggal</th>
											<th>#</th>
										</tr>
									</thead>
									<tbody>
										<?php 
										if ($model) {
											foreach ($model as $data) {
										?>
										<tr>
											<td>#</td>
											<td><?php echo $data->user->nama_lengkap; ?></td>
											<td><?php echo OrderMaster::get_travel($data->id_kategori_travel, $data->id_travel)->judul; ?></td>
											<td><?php echo $data->verifikasi_code; ?></td>
											<td><?php echo $data->type_payment->type; ?></td>
											<td class="text-right">Rp&nbsp;<?php echo number_format(OrderMaster::get_travel($data->id_kategori_travel, $data->id_travel)->harga,0,".","."); ?></td>
											<td class="text-right">Rp&nbsp;<?php echo number_format($data->payment + $data->payment_code,0,".","."); ?></td>
											<td><?php echo OrderMaster::get_status_pembayaran($data->status_payment); ?></td>
											<td><?php echo OrderMaster::get_status_konfirmasi($data->status_konfirmasi); ?></td>
											<td><?php echo $data->created_date; ?></td>
											<td><?php echo CHtml::link('<span class="glyphicon glyphicon-search" aria-hidden="true"></span> Detail', array('/order/detail', 'id'=>$data->id)); ?></td>
										</tr>
										<?php
											}
										}
										else {
										?>
										<tr>
											<td colspan=8>Tidak ada pesanan</td>
										</tr>
										<?php
										}
										?>
									</tbody>
								</table>
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
							</div>
						</div>

					</div>
				</div>
			</div>
		</di>
	</section>