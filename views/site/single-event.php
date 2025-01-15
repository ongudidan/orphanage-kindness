        <!--Start slider-section-->
        <section class="slider-section" style="background-image:url(/web/frontend/images/slider/2.jpg);">
            <div class="container">
                <div class="slider">
                    <div class="text team-light">
                        <h2>Event <span>details </span> </h2>
                        <p><a href="/">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i>Event Details</p>
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
                        <!-- Start single-item -->
                        <div class="blog-item clearfix">
                            <div class="img-holder">
                                <figure><img src="/web/uploads/<?= $model->image ?>" alt="Images"></figure>
                            </div>
                            <div class="item-text event-item clearfix">
                                <div class="text">
                                    <h4 class="we"><?= $model->title ?></h4>
                                    <h5><i class="fa fa-user" aria-hidden="true"></i>By <span>John Doe</span></h5>
                                    <h5 class="road"><i class="fa fa-map-marker" aria-hidden="true"></i>By <span><?= $model->address ?></span></h5>
                                </div>
                                <div class="tags clearfix">
                                    <p><i class="fa fa-calendar-o" aria-hidden="true"></i>15th october- at 10:00 am <span>Event Orgaanizer: <?= $model->event_organizer ?></span></p>
                                    <!-- <h5>Categories: <span>Gift, giving cloth</span></h5> -->
                                    <h5 class="cost">Event Cost: <span>Ksh. <?= number_format($model->event_cost) ?? 0 ?></span></h5>
                                    <a href="#" class="btn-2">Book now</a>
                                </div>
                            </div>
                            <p><?= $model->description ?></p>
                         
                        </div>
                        <!-- End single-item -->

                    </div>
                
                </div>
            </div>
        </section>
        <!--/blog-seciton-->