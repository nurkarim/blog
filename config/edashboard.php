<?php
$from = date('Y').'-'.date('m').'-01';
$to = date('Y-m-t'); //t means last day of the month
return [
        'app_title'            =>"Laradevs",
        'app_customize'        =>true,
        'app_logo_enable'      =>false,
        'app_logo'             =>"/public/images/1.png",
        'app_registered'       =>true,
        'top_nav_enable'       =>true,
        'top_nav_theme'        =>true,
        'fullscreen_theme'     =>true,
        'search_bar'           =>false,
        'menus'=>[
            [
                'name'=>"Dashboard",
                'url'=>"dashboard",
                'icon'=>"fas fa-tachometer-alt",
                'icon_color'=>"",
                'can'=>"isAdmin",
                'active'=>'active',
            ],
            [
                'name'=>"Posts",
                'url'=>"#",
                'icon'=>"fas fa-user-alt",
                'icon_color'=>"",
                'can'=>"",
                'active'=>'',
                'badge'=>true,
                'badge_color'=>'badge-info',
                'badge_number'=>3,
                'submenu'=>[
                    [
                        'name'=>'Add Articles',
                        'route'=>'posts.create',
                    ],
                    [
                        'name'=>'All Articles',
                        'route'=>'posts.index',
                    ],
                    [
                        'name'=>'Add Video Post',
                        'route'=>'video.post',
                    ],[
                        'name'=>'All Video Post',
                        'route'=>'video.postAll',
                    ],
                    [
                        'name'=>'All Pending Post',
                        'route'=>'post.pending',
                    ],
                    [
                        'name'=>'All Draft Post',
                        'route'=>'post.draftPost',
                    ],
                    [
                        'name'=>'All Scheduled Post',
                        'route'=>'post.schedulePost',
                    ]
                    ,
                    [
                        'name'=>'Category',
                        'route'=>'categories.index',
                    ],
                    [
                        'name'=>'Sub Category',
                        'route'=>'subcategories.index',
                    ]
                ],
            ],
            [
                'name'=>"Pages",
                'url'=>"#",
                'icon'=>"fa fa-chart-pie",
                'icon_color'=>"",
                'can'=>"",
                'active'=>'',
                'badge'=>true,
                'badge_color'=>'badge-danger',
                'badge_number'=>3,
                'submenu'=>[
                    [
                        'name'=>'Add Page',
                        'route'=>"pages.create",
                    ],
                    [
                        'name'=>'All Page',
                        'route'=>"pages.index",
                    ]
                ],
            ],
            [
                'name'=>"Ads",
                'url'=>"#",
                'icon'=>"fa fa-audio-description",
                'icon_color'=>"text-success",
                'can'=>"",
                'active'=>'',
            ],
            [
                'name'=>"Socials",
                'url'=>"#",
                'icon'=>"fas fa-poll",
                'icon_color'=>"text-danger",
                'can'=>"",
                'active'=>'',
            ],
            [
                'name'=>"Notification",
                'url'=>"#",
                'icon'=>"fa fa-bell",
                'icon_color'=>"",
                'can'=>"",
                'active'=>'',
                'badge'=>true,
                'badge_color'=>'badge-danger',
                'badge_number'=>3,
                'submenu'=>[
                    [
                        'name'=>'Send Notification',
                        'url'=>"#",
                    ],
                    [
                        'name'=>'Custom Notification',
                        'url'=>"#",
                    ],
                    [
                        'name'=>'Settings',
                        'url'=>"#",
                    ]
                ],
            ],
            [
                'name'=>"Appearance",
                'url'=>"#",
                'icon'=>"fa fa-th",
                'icon_color'=>"",
                'can'=>"",
                'active'=>'',
                'badge'=>true,
                'badge_color'=>'badge-danger',
                'badge_number'=>3,
                'submenu'=>[
                    [
                        'name'=>'Menu',
                        'route'=>"menu-items.index",
                    ],
                    [
                        'name'=>'Themes Options ',
                        'url'=>"#",
                    ]
                ],
            ],
            [
                'name'=>"Home Page Settings",
                'route'=>"themeSettings.index",
                'icon'=>"fa fa-cogs",
                'icon_color'=>"text-success",
                'can'=>"",
                'active'=>'',
            ],
            [
                'name'=>"Newsletter",
                'url'=>"#",
                'icon'=>"fa fa-envelope",
                'icon_color'=>"",
                'can'=>"",
                'active'=>'',
                'badge'=>true,
                'badge_color'=>'badge-success',
                'badge_number'=>3,
                'submenu'=>[
                    [
                        'name'=>'Subscribers',
                        'url'=>"#",
                    ],
                    [
                        'name'=>'Send Email',
                        'url'=>"#",
                    ]
                ],
            ],
            [
                'name'=>"Settings",
                'url'=>"#",
                'icon'=>"fa fa-cogs",
                'icon_color'=>"",
                'can'=>"",
                'active'=>'',
                'badge'=>true,
                'badge_color'=>'badge-danger',
                'badge_number'=>3,
                'submenu'=>[
                    [
                        'name'=>'Company Info',
                        'url'=>"#",
                    ],
                    [
                        'name'=>'Seo',
                        'url'=>"setting-seo",
                    ],
                    [
                        'name'=>'Cron Information',
                        'url'=>"cron-information",
                    ],
                    [
                        'name'=>'Email',
                        'url'=>"setting-email",
                    ],
                    [
                        'name'=>'recaptcha',
                        'url'=>"recaptcha",
                    ],
                    [
                        'name'=>'Storage settings',
                        'url'=>"storage-setting",
                    ],
                ],
            ],
            [
                'name'=>"Roles & Permission",
                'url'=>"#",
                'icon'=>"fa fa-key",
                'icon_color'=>"",
                'can'=>"",
                'active'=>'',
                'badge'=>true,
                'badge_color'=>'badge-danger',
                'badge_number'=>3,
                'submenu'=>[
                    [
                        'name'=>'Roles',
                        'url'=>"#",
                    ],
                    [
                        'name'=>'Permission',
                        'url'=>"#",
                    ]
                ],
            ],
            [
                'name'=>"Language",
                'url'=>"languages",
                'icon'=>"fa fa-language",
                'icon_color'=>"text-warning",
                'can'=>"",
                'active'=>'',
            ],
            [
                'name'=>"Password Change",
                'url'=>"#",
                'icon'=>"fa fa-key",
                'icon_color'=>"text-warning",
                'can'=>"",
                'active'=>'',
            ],
            [
                'name'=>"Logout",
                'route'=>"logout",
                'icon'=>"fa fa-arrow-left",
                'icon_color'=>"text-info",
                'can'=>"",
                'active'=>'',
                'onclick'=>"event.preventDefault(); document.getElementById('logout-form').submit();",
            ],
        ],


    'classes_body' => '',
    'classes_brand' => '',
    'classes_brand_text' => '',
    'classes_content_wrapper' => '',
    'classes_content_header' => '',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-dark-primary elevation-4',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container',


    ];
?>
