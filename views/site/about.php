<?php

/** @var yii\web\View $this */

use Soap\Url;
use yii\helpers\Html;
use yii\helpers\Url as HelpersUrl;

$this->title = 'About';
$this->params['breadcrumbs'][] = $this->title;
?>
<!--Start slider-section-->
<section class="slider-section" style="background-image:url(/web/frontend/images/slider/2.jpg);">
    <div class="container">
        <div class="slider">
            <div class="text">
                <h2>Save <span>people’s</span> Life</h2>
                <p><a href="index-2.html">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> About Us</p>
            </div>
        </div>
    </div>
</section>
<!--End slider-section-->
<!--.video-seciton-->
<section class="video-seciton">
    <div class="container">
        <div class="row">
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- Start single-item -->
                <div class="single-item">
                    <h2>who we <span>are?</span></h2>
                    <h4>help children: build a<br> School for education</h4>
                    <p>Every child deserves access to quality education. Let's come together to build a school that empowers young minds and transforms communities.

                        Education is the key to a brighter future. By supporting this project, you're giving children a safe place to learn, grow, and achieve their dreams.

                        Join us in making a lasting impact. Together, we can build a foundation of knowledge, hope, and opportunity.
                    </p>
                </div>
                <!-- End single-item -->
            </div>
            <div class="col-md-6 col-sm-6 col-xs-12">
                <!-- video-preview start -->
                <div class="video-preview" style="background-image:url(/web/frontend/images/blog/island.png);">
                    <ul class="v-container text-center">
                        <li>
                            <a href="https://www.youtube.com/watch?v=9U9S7Q5zFOc&pp=ygUcaXNsYW5kIG11c2xpbSBnaXJscyBvcmhhbmFnZQ%3D%3D" class="html5lightbox"><i class="fa fa-play" aria-hidden="true"></i></a>
                        </li>
                        <li>
                            <a href="https://www.youtube.com/watch?v=9U9S7Q5zFOc&pp=ygUcaXNsYW5kIG11c2xpbSBnaXJscyBvcmhhbmFnZQ%3D%3D" class="html5lightbox" id="watch-video"></a>
                        </li>
                    </ul>
                </div>
                <!-- video-preview end -->
            </div>
        </div>
    </div>
</section>
<!--/video-seciton-->
<!--.mission-seciton-->
<section class="mission-seciton">
    <div class="container">
        <div class="row">
            <div class="col-md-4 col-sm-4 col-xs-12">
                <!-- Start single-item -->
                <div class="mission-item ab-item">
                    <i class="flaticon-medical"></i>
                    <h4><a href="#">give donation</a></h4>
                    <p>Your generous donation can change a child’s life.<br>
                        Every contribution brings us closer to building a better future through education.<br>
                        .</p>
                </div>
                <!-- End single-item -->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <!-- Start single-item -->
                <div class="mission-item ab-item">
                    <i class="flaticon-heart-3"></i>
                    <h4><a href="#">become volunteer</a></h4>
                    <p>Join our mission and be the change. <br>
                        Your time and skills can make a huge difference in the lives of children in need.<br>
                        Together, we can create a brighter future for those who need it most.</p>
                </div>
                <!-- End single-item -->
            </div>
            <div class="col-md-4 col-sm-4 col-xs-12">
                <!-- Start single-item -->
                <div class="mission-item ab-item">
                    <i class="flaticon-heart"></i>
                    <h4><a href="#">fund raising</a></h4>
                    <p>Help us raise the resources needed to build and sustain our school. <br>
                        Organize, support, or participate in our fundraising campaigns.
                        <br>
                        .
                    </p>
                </div>
                <!-- End single-item -->
            </div>
        </div>
    </div>
</section>
<!--/mission-seciton-->
<!--Start volunteer-section -->
<section class="volunteer-section ab-mar" style="background-image:url(/web/frontend/images/blog/bg6.jpg);">
    <div class="container">
        <div class="volunteer-item">
            <div class="section-title text-center">
                <h2>WE HELP many people</h2>
                <h4>want to become a <span> volunteer!</span></h4>
            </div>
            <p>Your time and skills can make a real difference in someone's life.

Whether it's offering a helping hand, sharing your knowledge, or simply being there — every act of kindness counts.<br>Join our team of volunteers and help bring hope, care, and support to those who need it most.
.</p>
            <a href="<?= HelpersUrl::to(['site/volunteer']) ?>" class="btn-3">Apply now</a>
        </div>
    </div>
</section>
<!--End volunteer-section -->
<!--.team-seciton-->
<section class="team-seciton pad-top">
    <div class="container">
        <div class="section-title text-center">
            <h2>dadicated <span>team</span></h2>
            <p>Duis sed odio sit amet nibh vulputate cursus a sit amet mauris. Morbi accumsan<br>
                ipsuy veli. Nam nec tellus a odio tincidunt auctor </p>
        </div>
        <div class="row">
            <div class="teamcarosule">
                <div class="team-item">
                    <!-- Start single-item -->
                    <div class="single-item wow fadeInUp">
                        <div class="img-holder">
                            <figure><a href="team.html"><img src="/web/frontend/images/team/1.jpg" alt="Images"></a></figure>
                            <!-- Start overlay -->
                            <div class="overlay">
                                <div class="link-icon">
                                    <ul class="link">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End overlay -->
                        </div>
                        <div class="text">
                            <h4><a href="team.html">Alina Martin</a></h4>
                            <p>volunteer</p>
                        </div>
                    </div>
                    <!-- End single-item -->
                </div>
                <div class="team-item">
                    <!-- Start single-item -->
                    <div class="single-item wow fadeInUp">
                        <div class="img-holder">
                            <figure><a href="team.html"><img src="/web/frontend/images/team/2.jpg" alt="Images"></a></figure>
                            <!-- Start overlay -->
                            <div class="overlay">
                                <div class="link-icon">
                                    <ul class="link">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End overlay -->
                        </div>
                        <div class="text">
                            <h4><a href="team.html">Rina jho</a></h4>
                            <p>volunteer</p>
                        </div>
                    </div>
                    <!-- End single-item -->
                </div>
                <div class="team-item">
                    <!-- Start single-item -->
                    <div class="single-item wow fadeInUp">
                        <div class="img-holder">
                            <figure><a href="team.html"><img src="/web/frontend/images/team/3.jpg" alt="Images"></a></figure>
                            <!-- Start overlay -->
                            <div class="overlay">
                                <div class="link-icon">
                                    <ul class="link">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End overlay -->
                        </div>
                        <div class="text">
                            <h4><a href="team.html">james powel</a></h4>
                            <p>volunteer</p>
                        </div>
                    </div>
                    <!-- End single-item -->
                </div>
                <div class="team-item">
                    <!-- Start single-item -->
                    <div class="single-item wow fadeInUp">
                        <div class="img-holder">
                            <figure><a href="team.html"><img src="/web/frontend/images/team/4.jpg" alt="Images"></a></figure>
                            <!-- Start overlay -->
                            <div class="overlay">
                                <div class="link-icon">
                                    <ul class="link">
                                        <li>
                                            <a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-dribbble" aria-hidden="true"></i></a>
                                        </li>
                                        <li>
                                            <a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <!-- End overlay -->
                        </div>
                        <div class="text">
                            <h4><a href="team.html">natalia alex</a></h4>
                            <p>volunteer</p>
                        </div>
                    </div>
                    <!-- End single-item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--/team-seciton-->
<!--Start client-section -->
<section class="client-section" style="background-image:url(/web/frontend/images/blog/bg5.jpg);">
    <div class="container">
        <div class="section-title text-center">
            <h2>client <span>feedback</span></h2>
        </div>
        <div class="clientcarosule">
            <div class="client-item">
                <!-- Start single-item -->
                <div class="client">
                    <div class="img-holder">
                        <figure><img src="/web/frontend/images/blog/3.png" alt="Images"></figure>
                    </div>
                    <div class="text">
                        <h4>dAVID BROWN</h4>
                        <p>Assist manager</p>
                    </div>
                    <p>Quis autem velum iure reprhe nderit<br>
                        sit amet, consectetur neque.</p>
                </div>
                <!-- Eind single-item -->
            </div>
            <div class="client-item">
                <!-- Start single-item -->
                <div class="client">
                    <div class="img-holder">
                        <figure><img src="/web/frontend/images/blog/4.png" alt="Images"></figure>
                    </div>
                    <div class="text">
                        <h4>Sara leon</h4>
                        <p>ceo of kollol group</p>
                    </div>
                    <p>Quis autem velum iure reprhe nderit<br>
                        sit amet, consectetur neque.</p>
                    <!-- Eind single-item -->
                </div>
            </div>
            <div class="client-item">
                <!-- Start single-item -->
                <div class="client">
                    <div class="img-holder">
                        <figure><img src="/web/frontend/images/blog/4.png" alt="Images"></figure>
                    </div>
                    <div class="text">
                        <h4>burtho leo</h4>
                        <p>doctor</p>
                    </div>
                    <p>Quis autem velum iure reprhe nderit<br>
                        sit amet, consectetur neque.</p>
                    <!-- Eind single-item -->
                </div>
            </div>
        </div>
    </div>
</section>
<!--End client-section -->