      <?php

use yii\helpers\Url;

      ?>
      <!--Start slider-section-->
        <section class="slider-section" style="background-image:url(/web/frontend/images/slider/2.jpg);">
            <div class="container">
                <div class="slider">
                    <div class="text team-light">
                        <h2>our <span>recent</span> causes</h2>
                        <p><a href="index-2.html">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Causes</p>
                    </div>
                </div>
            </div>
        </section>
        <!--End slider-section-->
        <!--.welcome-seciton-->
        <section class="welcome-seciton page-causes">
            <div class="container">
                <div class="row">
                    <?php foreach ($model as $row) { ?>
                        <div class="col-md-3 col-sm-6 col-xs-12">
                            <!-- Start single-item -->
                            <div class="welcome-item hvr-float-shadow">
                                <div class="img-holder">
                                    <figure><a href="<?= Url::to(['/site/single-cause', 'id' => $row->id]) ?>"><img src="/web/uploads/<?= $row->image ?? '' ?>" alt="Images"></a></figure>
                                    <!-- Start overlay -->
                                    <div class="overlay">
                                        <h4><a href="<?= Url::to(['/site/single-cause', 'id' => $row->id]) ?>"><?= $row->title ?? '' ?></a></h4>
                                    </div>
                                    <!-- End overlay -->
                                </div>
                                <div class="text">
                                    <div class="pro-text">
                                        <h4>$44,210</h4>
                                        <p>Raised of <span>Ksh.<?= number_format($row->target_amount) ?? 0 ?></span></p>
                                    </div>
                                    <!--.progress-item -->
                                    <div class="causes-progress">
                                        <div class="progress-item">
                                            <div class="progress" data-value="45">
                                                <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                                    <div class="value-holder"><span class="value">45</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- /progress-item -->
                                    <p>
                                        <?= implode(' ', array_slice(explode(' ', $row->description ?? ''), 0, 20)) . '...' ?>

                                    </p>
                                    <a href="#">Donate now</a>
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
        </section>
        <!--/wellcome-seciton-->