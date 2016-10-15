<ul class="nav nav-pills nav-justified">
    <li<?php echo ($active == 'profil') ? ' class="active"' : ''; ?> role="presentation">
        <?php echo CHtml::link('Profil', array('/user/dashboard')); ?>
    </li>
    <li<?php echo ($active == 'pesanan') ? ' class="active"' : ''; ?> role="presentation">
        <?php echo CHtml::link('Pesanan', array('/user/pesanan')); ?>
    </li>
    <li<?php echo ($active == 'konfirmasi') ? ' class="active"' : ''; ?> role="presentation">
        <?php echo CHtml::link('Konfirm Pemb', array('/user/konfirmasi')); ?>
    </li>
    <li<?php echo ($active == 'faq') ? ' class="active"' : ''; ?> role="presentation">
        <?php echo CHtml::link('FAQ', array('/user/faq')); ?>
    </li>
</ul>