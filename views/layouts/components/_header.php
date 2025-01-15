<?php

use yii\helpers\Url;

$action = Yii::$app->controller->action->id;
$menus = [
    ['title' => 'HOME', 'url' => '/site/index', 'action' => 'index'],
    ['title' => 'BLOG', 'url' => '/site/blog', 'action' => 'blog'],
    ['title' => 'EVENTS', 'url' => '/site/event', 'action' => 'event'],
    // ['title' => 'GALLERY', 'url' => '/site/gallery', 'action' => 'gallery'],
    ['title' => 'ABOUT', 'url' => '/site/about', 'action' => 'about'],
    // ['title' => 'TEAM', 'url' => '/site/team', 'action' => 'team'],
    ['title' => 'CONTACT', 'url' => '/site/contact', 'action' => 'contact'],

]

?>

<header class="main-header header-style-one">
    <!-- <section class="header-top">
        <div class="container">
            <div class="header">
                <div class="header-top-left">
                    <ul>
                        <li><a href="#"><i class="fa fa-facebook" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-twitter" aria-hidden="true"></i></a></li>
                        <li><a href="#"><i class="fa fa-google-plus" aria-hidden="true"></i></a></li>
                    </ul>
                </div>
                <div class="header-top-right">
                    <ul>
                        <li>
                            <a href="#"><i class="fa fa-envelope-o" aria-hidden="true"></i> kindness@yahoo.com</a>
                        </li>
                        <li>
                            <p><i class="fa fa-phone" aria-hidden="true"></i>012.9355.121</p>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </section> -->
    <!--/header_top_area-->

    <!--/Header Top-->
    <section class="mainmenu-area">
        <div class="container">
            <div class="logo pull-left">
                <a href="<?= Url::to('/site/index') ?>"><img src="/web/frontend/images/logo.png" alt=""></a>
            </div>
            <nav class="main-menu pull-left">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <?php foreach ($menus as $menu) { ?>
                            <li class="<?= $action === $menu['action'] ? 'current' : ''  ?>"><a href="<?= Url::to($menu['url']) ?>"><?= $menu['title'] ?></a></li>
                        <?php } ?>
                    </ul>
                    <ul class="mobile-menu clearfix">
                        <?php foreach ($menus as $menu) { ?>
                            <li class="<?= $action === $menu['action'] ? 'current' : ''  ?>"><a href="<?= Url::to($menu['url']) ?>"><?= $menu['title'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
            <!-- <div class="signup">
                <ul>
                    <li><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i>login</a></li>
                    <li><a href="#"><span></span><i class="fa fa-user" aria-hidden="true"></i>signup</a></li>
                </ul>
            </div> -->
        </div>
    </section>
    <!--Main-Mane-->
    <section class="bounce-in-header">
        <div class="container ">
            <div class="logo pull-left">
                <a href="<?= Url::to('/site/index') ?>"><img src="/web/frontend/images/logo.png" alt=""></a>
            </div>
            <nav class="main-menu pull-left">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse clearfix">
                    <ul class="navigation clearfix">
                        <?php foreach ($menus as $menu) { ?>
                            <li class="<?= $action === $menu['action'] ? 'current' : ''  ?>"><a href="<?= Url::to($menu['url']) ?>"><?= $menu['title'] ?></a></li>
                        <?php } ?>
                    </ul>
                    <ul class="mobile-menu clearfix">
                        <?php foreach ($menus as $menu) { ?>
                            <li class="<?= $action === $menu['action'] ? 'current' : ''  ?>"><a href="<?= Url::to($menu['url']) ?>"><?= $menu['title'] ?></a></li>
                        <?php } ?>
                    </ul>
                </div>
            </nav>
            <!-- <div class="signup">
                <ul>
                    <li><a href="#"><i class="fa fa-arrow-circle-down" aria-hidden="true"></i>login</a></li>
                    <li><a href="#"><span></span><i class="fa fa-user" aria-hidden="true"></i>signup</a></li>
                </ul>
            </div> -->
        </div>
    </section>
    <!--/Main-Menu-->
</header>