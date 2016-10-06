<section style="margin-top: 5%;">
    <div class="signuppanel">
        <div class="row">
            <div class="col-md-12">
                <div class="signup-info">
                    <h4 align="center" class="nomargin">
                        Rincian Pesan
                    </h4>
                    <br>
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
                        <br>
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
                            <!-- table-responsive -->
                            <br>
                                <h5 class="subtitle mb5">
                                    Rincian Harga
                                </h5>
                                <div class="well">
                                    <p>Harap anda menambahkan tiga digit angka: <strong><?php echo $data->payment_code; ?></strong> pada total pembayaran anda yaitu <strong>Rp&nbsp;<?php echo number_format($data->payment) ?></strong> untuk kode unik dalam memudahkan proses verifikasi transaksi, anda dapat melihat contohnya pada di bawah ini : </p>
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
                                <!-- table-responsive -->
                                <div class="well">
                                    <strong>
                                        Transfer Bank
                                    </strong>
                                    <p>
                                        A list of items in which the order does explicitly matter.
                                    </p>
                                    <div class="table-responsive">
                                        <table class="table mb30">
                                            <thead>
                                                <tr>
                                                    <th>
                                                        Nama Bank
                                                    </th>
                                                    <th>
                                                        Rekening
                                                    </th>
                                                        <th>
                                                            Atas Nama
                                                        </th>
                                                    </tr>
                                                </thead>
                                                <tbody>
                                                    <tr>
                                                        <td>Mandiri</td>
                                                        <td>1010101010101010101010</td>
                                                        <td>Cho Kyuhyun</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BCA</td>
                                                        <td>1010101010101010101010</td>
                                                        <td>Cho Kyuhyun</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BNI</td>
                                                        <td>1010101010101010101010</td>
                                                        <td>Cho Kyuhyun</td>
                                                    </tr>
                                                    <tr>
                                                        <td>BRI</td>
                                                        <td>1010101010101010101010</td>
                                                        <td>Cho Kyuhyun</td>
                                                    </tr>
                                                </tbody>
                                            </table>
                                        </div>
                                        <!-- table-responsive -->
                                    </div>
                                    <div class="mb20">
                                    </div>
                                    <?php echo CHtml::link('Konfirmasi Pembayaran', array('confirm', 'id'=>$data->id), array('class'=>'btn btn-success', 'align'=>'center'));
                                    ?>
                                </br>
                            </br>
                        </br>
                    </div>
                    <!-- signup-info -->
            </div>
            <!-- col-sm-5 -->
        </div>
    <!-- signuppanel -->
</section>