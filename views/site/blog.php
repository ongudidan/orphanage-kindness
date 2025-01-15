<?php

/** @var yii\web\View $this */

use yii\helpers\Url;

$this->title = 'Our blogs';
?>
<div>
    <!--Start slider-section-->
    <section class="slider-section" style="background-image:url(/web/frontend/images/slider/2.jpg);">
        <div class="container">
            <div class="slider">
                <div class="text team-light">
                    <h2>our <span>recent</span> Blog</h2>
                    <p><a href="index-2.html">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Blog</p>
                </div>
            </div>
        </div>
    </section>
    <!--End slider-section-->
    <!--.blog-seciton-->
    <section class="blog-seciton blog-pag">
        <div class="container">
            <div class="row">
                <div class="col-md-12 col-sm-12 col-xs-12">
                    <?php foreach ($model as $row) { ?>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <!-- Start single-item -->
                            <div class="blog-item wow fadeInUp">
                                <div class="img-holder">
                                    <figure><a href="<?= Url::to(['/site/single-blog', 'id' => $row->id]) ?>"><img src="/web/uploads/<?= $row->image ?? '' ?>" alt="Images"></a>
                                    </figure>
                                </div>
                                <div class="text">
                                    <h4><a href="<?= Url::to(['/site/single-blog', 'id' => $row->id]) ?>"><?= $row->title ?? '' ?></a></h4>
                                    <!-- <h5><i class="fa fa-user" aria-hidden="true"></i>By <span>John Doe</span></h5>
                                <h5><i class="fa fa-map-marker" aria-hidden="true"></i>By <span>John Doe</span></h5> -->
                                    <p>
                                        <?= implode(' ', array_slice(explode(' ', $row->description ?? ''), 0, 20)) . '...' ?>
                                    </p>
                                    <a href="<?= Url::to(['/site/single-blog', 'id' => $row->id]) ?>" class="dont-btn">Read more</a>
                                </div>
                            </div>
                            <!-- End single-item -->
                        </div>
                    <?php } ?>

                </div>

            </div>
        </div>
    </section>
    <!--/blog-seciton-->

</div>