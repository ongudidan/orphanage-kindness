<?php

use yii\helpers\Url;

// Get the current module, controller, and action
$module = Yii::$app->controller->module->id;
$controller = Yii::$app->controller->id;
$action = Yii::$app->controller->action->id;

// Define sidebar menu structure with module, controller, and action
$sidebarMenus = [
    [
        'label' => 'Dashboard',
        'url' => Url::to(['/cms/default/index']),
        'icon' => 'fas fa-tachometer-alt',  // dashboard icon
        'module' => 'cms',
        'controller' => 'default',
        'action' => 'index',
    ],
    [
        'label' => 'Pages',
        'icon' => 'fas fa-box-open',  // Pages icon
        'submenu' => true,
        'active' => $module === 'dashboard' && $controller === 'page',
        'items' => [
            [
                'label' => 'Home Page',
                'url' => Url::to(['/cms/page/home']),
                'module' => 'cms',
                'controller' => 'page',
                'action' => 'home',
            ],
            [
                'label' => 'Blogs Page',
                'url' => Url::to(['/cms/page/blog']),
                'module' => 'cms',
                'controller' => 'page',
                'action' => 'blog',
            ],
            [
                'label' => 'Events Page',
                'url' => Url::to(['/cms/page/event']),
                'module' => 'cms',
                'controller' => 'page',
                'action' => 'event',
            ],
            [
                'label' => 'Cause Page',
                'url' => Url::to(['/cms/page/cause']),
                'module' => 'cms',
                'controller' => 'page',
                'action' => 'cause',
            ],
            // [
            //     'label' => 'Gallery Page',
            //     'url' => Url::to(['/cms/page/index']),
            //     'module' => 'cms',
            //     'controller' => 'page',
            //     'action' => 'gallery',
            // ],
            // [
            //     'label' => 'About Page',
            //     'url' => Url::to(['/cms/page/index']),
            //     'module' => 'cms',
            //     'controller' => 'page',
            //     'action' => 'about',
            // ],
            // [
            //     'label' => 'Contact Page',
            //     'url' => Url::to(['/cms/page/index']),
            //     'module' => 'cms',
            //     'controller' => 'page',
            //     'action' => 'contact',
            // ],
            // [
            //     'label' => 'Team Page',
            //     'url' => Url::to(['/cms/page/index']),
            //     'module' => 'cms',
            //     'controller' => 'page',
            //     'action' => 'team',
            // ],

        ]
    ],
    [
        'label' => 'Events',
        'icon' => 'fas fa-chart-line',  // Bulk Sale icon
        'submenu' => true,
        'active' => $module === 'cms' && $controller === 'event',
        'items' => [
            [
                'label' => 'Events List',
                'url' => Url::to(['/cms/event/index']),
                'module' => 'cms',
                'controller' => 'event',
                'action' => 'index',
            ],
            [
                'label' => 'Create Event',
                'url' => Url::to(['/cms/event/create']),
                'module' => 'cms',
                'controller' => 'event',
                'action' => 'create',
            ],
        ]
    ],
    [
        'label' => 'Blogs',
        'icon' => 'fas fa-shopping-cart',  // Bulk blog icon
        'submenu' => true,
        'active' => $module === 'cms' && $controller === 'blog',
        'items' => [
            [
                'label' => 'Blogs List',
                'url' => Url::to(['/cms/blog/index']),
                'module' => 'cms',
                'controller' => 'blog',
                'action' => 'index',
            ],
            [
                'label' => 'Create blog',
                'url' => Url::to(['/cms/blog/create']),
                'module' => 'cms',
                'controller' => 'blog',
                'action' => 'create',
            ],
        ]
    ],
    [
        'label' => 'Causes',
        'icon' => 'fas fa-shopping-cart',  // cause icon
        'submenu' => true,
        'active' => $module === 'cms' && $controller === 'cause',
        'items' => [
            [
                'label' => 'Causes List',
                'url' => Url::to(['/cms/cause/index']),
                'module' => 'cms',
                'controller' => 'cause',
                'action' => 'index',
            ],
            [
                'label' => 'Create Cause',
                'url' => Url::to(['/cms/cause/create']),
                'module' => 'cms',
                'controller' => 'cause',
                'action' => 'create',
            ],
        ]
    ],
    [
        'label' => 'Gallery',
        'icon' => 'fas fa-receipt',  // gallery icon
        'submenu' => true,
        'active' => $module === 'cms' && $controller === 'gallery',
        'items' => [
            [
                'label' => 'Gallery List',
                'url' => Url::to(['/cms/gallery/index']),
                'module' => 'cms',
                'controller' => 'gallery',
                'action' => 'index',
            ],
            [
                'label' => 'Create gallery',
                'url' => Url::to(['/cms/gallery/create']),
                'module' => 'cms',
                'controller' => 'gallery',
                'action' => 'create',
            ],
        ]
    ],
    [
        'label' => 'Team Members',
        'icon' => 'fas fa-shopping-cart',  // Bulk Payment Method icon
        'submenu' => true,
        'active' => $module === 'cms' && $controller === 'team',
        'items' => [
            [
                'label' => 'Team Members List',
                'url' => Url::to(['/cms/team/index']),
                'module' => 'cms',
                'controller' => 'team',
                'action' => 'index',
            ],
            [
                'label' => 'Create Member',
                'url' => Url::to(['/cms/team/create']),
                'module' => 'cms',
                'controller' => 'team',
                'action' => 'create',
            ],
        ]
    ],
    [
        'label' => 'Site Info',
        'icon' => 'fas fa-shopping-cart',  // site-info icon
        'submenu' => true,
        'active' => $module === 'cms' && $controller === 'site-info',
        'items' => [
            // [
            //     'label' => 'site-infos List',
            //     'url' => Url::to(['/cms/site-info/index']),
            //     'module' => 'cms',
            //     'controller' => 'site-info',
            //     'action' => 'index',
            // ],
            [
                'label' => 'Update Site Info',
                'url' => Url::to(['/cms/site-info/create']),
                'module' => 'cms',
                'controller' => 'site-info',
                'action' => 'create',
            ],
        ]
    ],
 
];



?>
<div class="sidebar" id="sidebar">
    <div class="sidebar-inner slimscroll">
        <div id="sidebar-menu" class="sidebar-menu">
            <ul>
                <li class="menu-title">
                    <span>Main Dashboard</span>
                </li>

                <?php foreach ($sidebarMenus as $menu): ?>
                    <?php if (isset($menu['submenu']) && $menu['submenu']): ?>
                        <!-- Submenu -->
                        <li class="submenu <?= $menu['active'] ? 'active' : '' ?>">
                            <a href="#"><i class="<?= $menu['icon'] ?>"></i> <span> <?= $menu['label'] ?> </span> <span class="menu-arrow"></span></a>
                            <ul>
                                <?php foreach ($menu['items'] as $subItem): ?>
                                    <li>
                                        <a href="<?= $subItem['url'] ?>"
                                            class="<?= ($module == $subItem['module'] && $controller == $subItem['controller'] && $action == $subItem['action']) ? 'active' : '' ?>">
                                            <?= $subItem['label'] ?>
                                        </a>
                                    </li>
                                <?php endforeach; ?>
                            </ul>
                        </li>
                    <?php else: ?>
                        <!-- Regular Menu -->
                        <li class="<?= ($module == $menu['module'] && $controller == $menu['controller'] && $action == $menu['action']) ? 'active' : '' ?>">
                            <a href="<?= $menu['url'] ?>"><i class="<?= $menu['icon'] ?>"></i> <span> <?= $menu['label'] ?> </span></a>
                        </li>
                    <?php endif; ?>
                <?php endforeach; ?>

            </ul>
        </div>
    </div>
</div>

