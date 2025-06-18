<?php

/** @var yii\web\View $this */

$this->title = 'Island Muslim Orphanage - Home';
?>
<div>

    <!-- ================================= Banner ====================== -->

    <?= $this->render('components/home/_main-slider') ?>

    <!-- ====================== /Banner =================== -->
    <!--.welcome-seciton-->

    <?= $this->render('components/home/_welcome-section') ?>

    <!--/wellcome-seciton-->

    <!--.event-seciton-->

    <?= $this->render('components/home/_event-section') ?>

    <!--/event-seciton-->
    
    <!--.contact-seciton-->

    <?= $this->render('components/home/_contact-section') ?>

    <!--/contact-seciton-->

    <!--.donator-seciton-->

    <?= $this->render('components/home/_donator-section') ?>

    <!--/donator-seciton-->

</div>