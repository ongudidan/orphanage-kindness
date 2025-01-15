 <?php

    use app\models\SiteInfo;

    $siteInfo = SiteInfo::find()->one();
    ?>
 <footer class="footer-section">
     <div class="container">
         <div class="row">
             <div class="footer-item">
                 <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="widget">
                         <h2>Information</h2>
                         <p><?= $siteInfo->footer_text ?? '' ?></p>
                         <h5><i class="fa fa-map-marker" aria-hidden="true"></i><?= $siteInfo->address ?? '' ?></h5>
                         <h5><i class="fa fa-envelope-o" aria-hidden="true"></i><?= $siteInfo->email ?? '' ?></h5>
                         <h5><i class="fa fa-phone" aria-hidden="true"></i><?= $siteInfo->phone ?? '' ?></h5>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="date-widget">
                         <h2>Latest Works</h2>
                         <h4>Food is Giving to them</h4>
                         <p>July 29, 2017 BY Donald</p>
                         <h4>Buy some candy for children</h4>
                         <p><span>February 15, 2017 BY</span> regaldev</p>
                         <h4>Build a building for shelter</h4>
                         <p>July 29, 2017 BY Donald</p>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="feed-widget">
                         <h2>twitter feed</h2>
                         <div class="footercarosule">
                             <div class="item">
                                 <p>Have managed to checkout successfully?
                                     We can help,just let us know if you need
                                     help via email (see our website)
                                 </p>
                                 <a href="#">www.themeforest.net</a>
                                 <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i>
                                     <h4>John Doe <span>regaldev</span></h4>
                                     <P>18 hours Ago</P>
                                 </div>
                             </div>
                             <div class="item">
                                 <p>Have managed to checkout successfully?
                                     We can help,just let us know if you need
                                     help via email (see our website)
                                 </p>
                                 <a href="#">www.themeforest.net</a>
                                 <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i>
                                     <h4>John Doe <span>regaldev</span></h4>
                                     <P>18 hours Ago</P>
                                 </div>
                             </div>
                             <div class="item">
                                 <p>Have managed to checkout successfully?
                                     We can help,just let us know if you need
                                     help via email (see our website)
                                 </p>
                                 <a href="#">www.themeforest.net</a>
                                 <div class="icon"><i class="fa fa-twitter" aria-hidden="true"></i>
                                     <h4>John Doe <span>regaldev</span></h4>
                                     <P>18 hours Ago</P>
                                 </div>
                             </div>
                         </div>
                     </div>
                 </div>
                 <div class="col-md-3 col-sm-6 col-xs-12">
                     <div class="gallery-widget">
                         <h2>Instagram Photos</h2>
                         <ul class="gallery">
                             <li>
                                 <div class="img-holder">
                                     <img src="/web/frontend/images/gallery/1.jpg" alt="Images">
                                     <div class="overlay">
                                         <div class="box">
                                             <div class="content">
                                                 <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="img-holder">
                                     <img src="/web/frontend/images/gallery/2.jpg" alt="Images">
                                     <div class="overlay">
                                         <div class="box">
                                             <div class="content">
                                                 <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="img-holder">
                                     <img src="/web/frontend/images/gallery/3.jpg" alt="Images">
                                     <div class="overlay">
                                         <div class="box">
                                             <div class="content">
                                                 <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="img-holder">
                                     <img src="/web/frontend/images/gallery/4.jpg" alt="Images">
                                     <div class="overlay">
                                         <div class="box">
                                             <div class="content">
                                                 <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="img-holder">
                                     <img src="/web/frontend/images/gallery/5.jpg" alt="Images">
                                     <div class="overlay">
                                         <div class="box">
                                             <div class="content">
                                                 <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                             <li>
                                 <div class="img-holder">
                                     <img src="/web/frontend/images/gallery/6.jpg" alt="Images">
                                     <div class="overlay">
                                         <div class="box">
                                             <div class="content">
                                                 <a href="#"><i class="fa fa-link" aria-hidden="true"></i></a>
                                             </div>
                                         </div>
                                     </div>
                                 </div>
                             </li>
                         </ul>
                     </div>
                 </div>
             </div>
         </div>
     </div>
 </footer>