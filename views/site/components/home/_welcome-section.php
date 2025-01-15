  <?php

    use app\models\HomePage;

    $homePage = HomePage::find()->one();
    ?>
  <section class="welcome-seciton">
      <div class="container">
          <div class="section-title text-center">
              <h6><?= $homePage->causes_sub_title ?? '' ?></h6>
              <h2>Recent <span>Causes</span></h2>
              <p><?= $homePage->causes_description ?? '' ?></p>
          </div>
          <div class="row">
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <!-- Start single-item -->
                  <div class="welcome-item">
                      <div class="img-holder">
                          <figure><a href="single-causes.html"><img src="/web/frontend/images/blog/1.jpg" alt="Images"></a></figure>
                          <!-- Start overlay -->
                          <div class="overlay">
                              <h4><a href="single-causes.html">Help to reach <span>food!</span></a></h4>
                          </div>
                          <!-- End overlay -->
                      </div>
                      <div class="text">
                          <div class="pro-text">
                              <h4>$44,210</h4>
                              <p>Raised of <span>$99,541</span></p>
                          </div>
                          <!--.progress-item -->
                          <div class="causes-progress">
                              <div class="progress-item">
                                  <div class="progress" data-value="35">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                          <div class="value-holder"><span class="value">30</span></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- /progress-item -->
                          <p>Lorum ipsum iure reprhe pu nderit
                              sit amet, consectetur neque.</p>
                          <a href="#">Donate now</a>
                      </div>
                  </div>
                  <!-- End single-item -->
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <!-- Start single-item -->
                  <div class="welcome-item">
                      <div class="img-holder">
                          <figure><a href="single-causes.html"><img src="/web/frontend/images/blog/2.jpg" alt="Images"></a></figure>
                          <!-- Start overlay -->
                          <div class="overlay">
                              <h4><a href="single-causes.html">Help to reach <span>food!</span></a></h4>
                          </div>
                          <!-- End overlay -->
                      </div>
                      <div class="text">
                          <div class="pro-text">
                              <h4>$44,210</h4>
                              <p>Raised of <span>$99,541</span></p>
                          </div>
                          <!--.progress-item -->
                          <div class="causes-progress">
                              <div class="progress-item">
                                  <div class="progress" data-value="70">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                          <div class="value-holder"><span class="value">70</span></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- /progress-item -->
                          <p>Lorum ipsum iure reprhe pu nderit
                              sit amet, consectetur neque.</p>
                          <a href="#">Donate now</a>
                      </div>
                  </div>
                  <!-- End single-item -->
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <!-- Start single-item -->
                  <div class="welcome-item">
                      <div class="img-holder">
                          <figure><a href="single-causes.html"><img src="/web/frontend/images/blog/3.jpg" alt="Images"></a></figure>
                          <!-- Start overlay -->
                          <div class="overlay">
                              <h4><a href="single-causes.html">Help to reach <span>food!</span></a></h4>
                          </div>
                          <!-- End overlay -->
                      </div>
                      <div class="text">
                          <div class="pro-text">
                              <h4>$44,210</h4>
                              <p>Raised of <span>$99,541</span></p>
                          </div>
                          <!--.progress-item -->
                          <div class="causes-progress">
                              <div class="progress-item">
                                  <div class="progress" data-value="75">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                          <div class="value-holder"><span class="value">75</span></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- /progress-item -->
                          <p>Lorum ipsum iure reprhe pu nderit
                              sit amet, consectetur neque.</p>
                          <a href="#">Donate now</a>
                      </div>
                  </div>
                  <!-- End single-item -->
              </div>
              <div class="col-md-3 col-sm-6 col-xs-12">
                  <!-- Start single-item -->
                  <div class="welcome-item">
                      <div class="img-holder">
                          <figure><a href="single-causes.html"><img src="/web/frontend/images/blog/1.jpg" alt="Images"></a></figure>
                          <!-- Start overlay -->
                          <div class="overlay">
                              <h4><a href="single-causes.html">Help to reach <span>food!</span></a></h4>
                          </div>
                          <!-- End overlay -->
                      </div>
                      <div class="text">
                          <div class="pro-text">
                              <h4>$44,210</h4>
                              <p>Raised of <span>$99,541</span></p>
                          </div>
                          <!--.progress-item -->
                          <div class="causes-progress">
                              <div class="progress-item">
                                  <div class="progress" data-value="35">
                                      <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                          <div class="value-holder"><span class="value">35</span></div>
                                      </div>
                                  </div>
                              </div>
                          </div>
                          <!-- /progress-item -->
                          <p>Lorum ipsum iure reprhe pu nderit
                              sit amet, consectetur neque.</p>
                          <a href="#">Donate now</a>
                      </div>
                  </div>
                  <!-- End single-item -->
              </div>
          </div>
      </div>
  </section>