    <?php

    use yii\helpers\Url;

    $events = \app\models\Event::find()->limit(4)->all();
    ?>
    <section class="event-seciton">
        <div class="container">
            <div class="section-title">
                <h2>upcoming <span>event</span></h2>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor<br>
                    incididunt ut labore et dolore magna aliqua. Ut enim ad minim.</p>
            </div>
            <div class="row">
                <div class="col-md-8 col-sm-8 col-xs-12">
                    <div class="row">
                        <?php foreach ($events as $row) { ?>
                            <div class="col-md-6 col-sm-6 col-xs-12">
                                <!-- Start single-item -->
                                <div class="event-item">
                                    <div class="img-holder">
                                        <figure><a href="<?= Url::to(['/site/single-event', 'id' => $row->id]) ?>"><img src="/web/uploads/<?= $row->image ?? '' ?>" alt="Images"></a></figure>
                                        <div class="text">
                                            <h4><a href="<?= Url::to(['/site/single-event', 'id' => $row->id]) ?>"><?= isset($row->date) && is_numeric($row->date) ? date('Y-m-d H:i:s', (int)$row->date) : '' ?>
                                                    <span><?= $row->title ?? '' ?></span></a></h4>
                                        </div>
                                    </div>
                                </div>
                                <!-- End single-item -->
                            </div>
                        <?php } ?>

                    </div>
                </div>
                <div class="col-md-4 col-sm-4 col-xs-12">
                    <!-- Start single-item -->
                    <div class="event-right">
                        <div class="text">
                            <div class="date">
                                <h4>19<span class="sep">th sep,</span> <span> 2017</span></h4>
                            </div>
                            <h2>help children: build a School for education</h2>
                            <h4>Join Our Event: <span>Donate</span></h4>
                            <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit,
                                sed do eiusmod tempor incididunt ut labore et dolore
                                magna aliqua. Ut enim ad minim veniam, quis nostrud
                                exercitation ullamco laboris nisi ut aliquip ex ea
                                Lorem ipsum dolor sit amet, consectetur.</p>
                            <a href="single-event.html">View All Events</a>
                        </div>
                    </div>
                    <!-- End single-item -->
                </div>
            </div>
        </div>
    </section>