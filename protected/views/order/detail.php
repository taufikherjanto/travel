<div style="margin-bottom: 20px"></div>
<section class="content">
    <div class="tab-fitur">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <div class="content">
                        <div class="panel panel-default">
                            <div class="panel-heading">
                                <?php echo CHtml::link("&laquo; Kembali", array('/order/admin'));?> | Rincian Pesanan
                            </div>
                            <div class="panel-body" style="padding: 30px">
                                <div class="row">
                                    <div class="media">
                                        <div class="media">
                                            <?php echo CHtml::image(Yii::app()->baseUrl."/images/".$jenis."/".$produk->gambar,'alt',array("width"=>"200px", "height"=>"200px", "class"=>"media-object")); ?>
                                        </div>
                                        <div class="media-body">
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
                                    </div>
                                </div>
                                <div class="row">
                                    <h5 class="subtitle mb5">
                                        Data Pemesan
                                    </h5>
                                    <div class="table-responsive">
                                        <table class="table mb30">
                                            <tbody>
                                                <tr>
                                                    <td>Nama</td>
                                                    <td><?php echo $data->user_ref->nama_ref; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>No Telp</td>
                                                    <td><?php echo $data->user_ref->tel_ref; ?></td>
                                                </tr>
                                                <tr>
                                                    <td>Alamat</td>
                                                    <td><?php echo $data->user_ref->alamat_ref; ?></td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                                <div class="row">
                                    <h5 class="subtitle mb5">
                                        Rincian Harga
                                    </h5>
                                    <div class="table-responsive">
                                        <table class="table mb30">
                                            <thead>
                                                <tr>
                                                    <th>Kode Verifikasi</th>
                                                    <th>Tipe Payment</th>
                                                    <th>Status</th>
                                                    <th>Status Konfirmasi</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <td><?php echo $data->verifikasi_code; ?></td>
                                                <td><?php echo $data->type_payment->type; ?></td>
                                                <td><?php echo OrderMaster::get_status_pembayaran($data->status_payment); ?></td>
                                                <td><?php echo OrderMaster::get_status_konfirmasi($data->status_konfirmasi); ?></td>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div class="well">
                                        <div class="row" style="padding: 10px">
                                            <div class="thumbnail col-md-4 text-center">
                                                    <p class="tebal">
                                                    Kode unik</p>
                                                    <h3 style="color:#e74c3c;"><?php echo $data->payment_code; ?></h3>
                                            </div>
                                            <div class="thumbnail col-md-4 text-center">
                                                    <p class="tebal">
                                                    Biaya yang harus dibayar</p>
                                                    <h3>Rp&nbsp;<?php echo number_format($data->payment,0,".",".") ?></h3>
                                            </div>
                                            <div class="thumbnail col-md-4 text-center">
                                                    <p style="color:#2ecc71" class="tebal">
                                                    Biaya yang harus ditransfer  </hp>
                                                    <h3>Rp <?php echo number_format(($data->payment + $data->payment_code),0,".","."); ?></h3>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <h5 class="subtitle mb5">
                                        Bukti Konfirmasi
                                    </h5>
                                    <div class="media">
                                    <?php
                                    foreach($bukti_pembayaran as $item_bukti) {
                                        echo CHtml::image(Yii::app()->baseUrl."/images/bukti/".$item_bukti->gambar,'alt',array("width"=>"200px", "height"=>"200px"));
                                    }
                                    ?>
                                    </div>
                                    <br>
                                    <div class="mb20">
                                    <?php
                                        $form = $this->beginWidget(
                                            'CActiveForm',
                                            array(
                                                'id' => 'update-status-transaksi',
                                                'enableAjaxValidation' => false,
                                                'htmlOptions' => array(
                                                    'class'=>'form-inline'
                                                ),
                                            )
                                        );
                                        echo CHtml::activeDropDownList($data,
                                            'status_konfirmasi',
                                            array('0'=>'Belum dikonfirmasi','1'=>'Konfirmasi DP telah diverifikasi, menunggu pelunasan','2'=>'Pembayaran Lunas & konfirmasi telah diverifikasi'),
                                            array('empty'=>'Pilih Status Konfirmasi', 'class'=>'form-control'));

                                        echo ' '.CHtml::submitButton('Save', array('class'=>'btn btn-success'));

                                        $this->endWidget();

                                    ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>