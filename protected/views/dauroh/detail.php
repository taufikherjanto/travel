<!-- Start Content -->
    <br><br>
    <?php foreach($lihat as $item){ ?>
    <section class="content">
        
        <div class="product">
            <div class="container">             
                <div class="col-md-12 product-price1">
                    <div class="col-md-8 single-top">   
                        <div class="flexslider">
                            <ul class="slides">
                                <li data-thumb="<?php echo Yii::app()->request->baseUrl ?>/images/dauroh/<?php echo $item->gambar; ?>">
                                    <img src="<?php echo Yii::app()->request->baseUrl ?>/images/dauroh/<?php echo $item->gambar; ?>" />
                                </li>
                                <?php 
                                    $idnya = $item->id;
                                    $fotox = Yii::app()->db
                                     ->createCommand()
                                     ->select('*')
                                     ->from('dauroh_gallery')
                                     ->where('gambar_id=:gambar_id', array(':gambar_id'=>$idnya))
                                     ->queryAll();
                                     foreach($fotox as $F){ ?>
                                        <li data-thumb="<?php echo Yii::app()->request->baseUrl ?>/images/dauroh_gallery/<?php echo $F['gambar'] ?>">
                                            <img src="<?php echo Yii::app()->request->baseUrl ?>/images/dauroh_gallery/<?php echo $F['gambar'] ?>" />
                                        </li>
                                <?php } ?>
                            </ul>
                        </div>
                        <!-- FlexSlider -->
                        <script defer src="<?php echo Yii::app()->request->baseUrl ?>/js/jquery.flexslider.js"></script>
                        <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl ?>/css/flexslider.css" type="text/css" media="screen" />

                        <script>
                        // Can also be used with $(document).ready()
                        $(window).load(function() {
                            $('.flexslider').flexslider({
                                animation: "slide",
                                controlNav: "thumbnails"    
                            });
                        });
                        </script>
                    </div>

                    <div class="col-md-4 single-top-in simpleCart_shelfItem">
                        <div class="single-para ">
                            <h4>Lorem Ipsum</h4>
                            <h5 class="item_price">Rp.<?php echo number_format($item->harga,0,".",".") ?></h5>
                            <p><?php echo $item->desc; ?></p>
                            <?php echo CHtml::link('Booking', array('/transaksi/order', 'id'=>$item->id, 'kategori'=>$item->id_kategori), array('class'=>'add-cart item_add btn-letter'));
                            ?>
                        </div>
                    </div>

                    <div class="clearfix"> </div>
                </div>
                
                <div class="clearfix"> </div>
            </div>
        </div> 
        
    </section>
    <?php } ?>
    <!-- End Content -->