
<?php

use yii\helpers\Url;

?>
 <!--Start slider-section-->
 <section class="slider-section" style="background-image:url(/web/uploads/<?= $eventBanner->banner_image ?? 'default-banner.jpg' ?>);">
 <div class="container">
        <div class="slider">
            <div class="text team-light">
                <h2> <span>All</span> Events </h2>
                <p><a href="/">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Events</p>
            </div>
        </div>
    </div>
</section>
<!--End slider-section-->
<!--.event-seciton-->
<section class="event-seciton event-page">
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
               
                <div class="row">
                    <?php foreach($model as $row ){ ?>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <!-- Start single-item -->
                        <div class="event-item">
                            <div class="img-holder">
                                <figure><a href="<?= Url::to(['/site/single-event', 'id' => $row->id]) ?>"><img src="/web/uploads/<?= $row->image ?? '' ?>" alt="Images"></a></figure>
                                <div class="text">
                                    <h4><a href="<?= Url::to(['/site/single-event', 'id' => $row->id]) ?>"> <?= $row->date ?>   <span><?= $row->title ?></span></a></h4>
                                </div>
                            </div>
                        </div>
                        <!-- End single-item -->
                    </div>
                    <?php } ?>
                 
                </div>
                <div class="page-list">
                    <ul>
                        <li><a href="#">1</a></li>
                        <li><a href="#">2</a></li>
                        <li><a href="#">3</a></li>
                        <li><a href="#" class="next">next</a></li>
                    </ul>
                </div>
            </div>
        
        </div>
    </div>
</section>
<!--/event-seciton-->