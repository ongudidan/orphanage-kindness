<?php

use app\models\HomePage;


$mainBanner = HomePage::find()->one();
?>
<section class="main-slider">
    <div class="tp-banner-container">
        <div class="tp-banner">
            <ul>
                <!-- <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/web/frontend/images/slider/4.jpg" data-saveperformance="off" data-title="Awsome Service">
                        <img src="/web/frontend/images/slider/4.jpg" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat"> -->
                <li data-transition="fade" data-slotamount="1" data-masterspeed="1000" data-thumb="/web/<?= isset($mainBanner) && $mainBanner->main_banner ? 'uploads/' . $mainBanner->main_banner : 'frontend/images/slider/4.jpg' ?>" data-saveperformance="off" data-title="Awsome Service">
                    <img src="/web/<?= isset($mainBanner) && $mainBanner->main_banner ? 'uploads/' . $mainBanner->main_banner : 'frontend/images/slider/4.jpg' ?>" alt="" data-bgposition="center top" data-bgfit="cover" data-bgrepeat="no-repeat">

                    <div class="tp-caption lfl tp-resizeme"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-100"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div class="grey-title">
                            <!-- <h4>Thousand of children are waiting for help!</h4> -->
                            <h4><?= $mainBanner->main_banner_sub_title ?? '' ?></h4>

                        </div>
                    </div>
                    <div class="tp-caption lfl tp-resizeme"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="-40"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div class="grey-title">
                            <!-- <h2>help the <span>poor</span>people</h2> -->
                            <h2><?= $mainBanner->main_banner_title ?? '' ?></h2>

                        </div>
                    </div>

                    <div class="tp-caption lfr tp-resizeme"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="50"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div class="grey-title">
                            <!-- <p>Sed ut perspiciatis, unde omnis iste natus error sit voluptatem accusantium doloremque la<br>
                                udantium, totam rem aperiam eaque ipsa, quae ab illo inventore
                            <p> -->

                            <!-- <p><?= $mainBanner->description ?? '' ?>
                            <p> -->
                        </div>
                    </div>
                    <div class="tp-caption lfl tp-resizeme"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="100"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">
                        <div class="grey-title"><a href="donate" class="btn-3">Donate now</a></div>
                    </div>
                    <div class="tp-caption lfr tp-resizeme"
                        data-x="center" data-hoffset="0"
                        data-y="center" data-voffset="400"
                        data-speed="1500"
                        data-start="500"
                        data-easing="easeOutExpo"
                        data-splitin="none"
                        data-splitout="none"
                        data-elementdelay="0.01"
                        data-endelementdelay="0.3"
                        data-endspeed="1200"
                        data-endeasing="Power4.easeIn"
                        style="z-index: 4; max-width: auto; max-height: auto; white-space: nowrap;">

                    </div>
                </li>
            </ul>
            <div class="tp-bannertimer"></div>

        </div>
    </div>

</section>