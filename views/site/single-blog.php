    <!--Start slider-section-->
    <section class="slider-section" style="background-image:url(images/slider/2.jpg);">
        <div class="container">
            <div class="slider">
                <div class="text team-light">
                    <h2>BLOG <span>details</span> </h2>
                    <p><a href="index-2.html">Home</a> <i class="fa fa-angle-right" aria-hidden="true"></i> Details</p>
                </div>
            </div>
        </div>
    </section>
    <!--End slider-section-->
    <!--.blog-seciton-->
    <section class="blog-seciton blog-pag">
        <div class="container">
            <div class="row">
                <div class="col-md-9 col-sm-8 col-xs-12">
                    <!-- Start single-item -->
                    <div class="blog-item clearfix">
                        <div class="img-holder">
                            <figure><img src="/web/uploads/<?= $model->image ??  '' ?>" alt="Images"></figure>
                        </div>
                        <div class="item-text clearfix">
                            <div class="date">
                                <h4>
                                    <?= date('d M, Y', $model->created_at) ?? '' ?>
                                </h4>
                            </div>
                            <div class="text">
                                <h5><i class="fa fa-user" aria-hidden="true"></i>By <span><?= $model->created_by ?? 'Admin' ?> </span></h5>
                                <h5 class="road"><i class="fa fa-map-marker" aria-hidden="true"></i>By <span>Hazi mohshin road, khulna</span></h5>
                                <h4>we will go for giving gift!</h4>
                            </div>
                        </div>
                        <p><?= $model->description ?? '' ?></p> 
                        
                    </div>
                    <!-- End single-item -->
                
                </div>
                <div class="col-md-3 col-sm-4 col-xs-12">
                    <!-- Start side-bar -->
                    <div class="side-bar">
                        <div class="side-search">
                            <ul class="search-bar">
                                <li>
                                    <form action="#">
                                        <input type="text" placeholder="Enter Your Keyword">
                                        <button type="submit"><i class="fa fa-search"></i></button>
                                    </form>
                                </li>
                            </ul>
                            <h5>Looking For A Good Place</h5>
                        </div>
                        <div class="similar">
                            <h2>Similar Causess</h2>
                            <!-- Start single-item -->
                            <div class="blog-item mar-0">
                                <div class="img-holder">
                                    <figure><a href="single-blog.html"><img src="images/blog/3.jpg" alt="Images"></a></figure>
                                </div>
                                <div class="text">
                                    <h4><a href="single-blog.html">Children’s National<br>festival for learning</a></h4>
                                    <h5><i class="fa fa-user" aria-hidden="true"></i>By <span>John Doe</span></h5>
                                    <h5><i class="fa fa-map-marker" aria-hidden="true"></i>By <span>John Doe</span></h5>
                                    <a href="single-blog.html" class="dont-btn">Read more</a>
                                </div>
                            </div>
                            <!-- End single-item -->
                        </div>
                        <div class="category">
                            <h2>category</h2>
                            <ul>
                                <li><a href="#">Food<span>(10)</span></a></li>
                                <li><a href="#">Nonprofit<span>(8)</span></a></li>
                                <li><a href="#">Wedding<span>(5)</span></a></li>
                                <li><a href="#">Architecture<span>(13)</span></a></li>
                            </ul>
                        </div>
                        <div class="category">
                            <h2>Archives</h2>
                            <ul>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>October 2014</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i> November 2014</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>December 2014</a></li>
                                <li><a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>January 2015</a></li>
                                <li>
                                    <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>Feberuary 2015</a>
                                </li>
                                <li>
                                    <a href="#"><i class="fa fa-caret-right" aria-hidden="true"></i>March 2015</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                    <!-- Eind side-bar -->
                </div>
            </div>
        </div>
    </section>
    <!--/blog-seciton-->