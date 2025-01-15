  <?php

    use app\models\HomePage;

    $homePage = HomePage::find()->one();
    ?>
  <section class="helping-seciton" style="background-image:url(/web/frontend/images/blog/bg.jpg);">
      <div class="container">
          <div class="row">
              <div class="col-md-7 col-sm-6 col-xs-12">
                  <div class="text">
                      <h2><?= $homePage->help_title ?? '' ?>
                      </h2>
                      <p><?= $homePage->help_description ?? '' ?></p>
                      <div class="pro-text">
                          <h4>$44,210</h4>
                          <p>Raised of <span> $99,541</span> Goal</p>
                      </div>
                      <!--.progress-item -->
                      <div class="causes-progress">
                          <div class="progress-item">
                              <div class="progress" data-value="50">
                                  <div class="progress-bar" role="progressbar" aria-valuenow="100" aria-valuemin="0" aria-valuemax="100">
                                      <div class="value-holder"><span class="value">10</span></div>
                                  </div>
                              </div>
                          </div>
                      </div>
                      <!-- /progress-item -->
                      <a href="#">Donate now</a>
                  </div>
              </div>
              <div class="col-md-5 col-sm-6 col-xs-12">
                  <!-- video-preview start -->
                  <div class="video-preview" style="background-image:url(/web/frontend/images/blog/bg3.jpg);">
                      <ul class="v-container text-center">
                          <li>
                              <a href="https://www.youtube.com/watch?v=rP2x7nrrDc4" class="html5lightbox"><i class="fa fa-play" aria-hidden="true"></i></a>
                          </li>
                          <li>
                              <a href="https://www.youtube.com/watch?v=rP2x7nrrDc4" class="html5lightbox" id="watch-video"></a>
                          </li>
                      </ul>
                  </div>
                  <!-- video-preview end -->
              </div>
          </div>
      </div>
  </section>