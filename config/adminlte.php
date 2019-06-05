<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title
    |--------------------------------------------------------------------------
    |
    | The default title of your admin panel, this goes into the title tag
    | of your page. You can override it per page with the title section.
    | You can optionally also specify a title prefix and/or postfix.
    |
    */

    'title' => 'Admin',

    'title_prefix' => '',

    'title_postfix' => '',

    /*
    |--------------------------------------------------------------------------
    | Logo
    |--------------------------------------------------------------------------
    |
    | This logo is displayed at the upper left corner of your admin panel.
    | You can use basic HTML here if you want. The logo has also a mini
    | variant, used for the mini side bar. Make it 3 letters or so
    |
    */

    'logo' => '<b>Admin</b>',

    'logo_mini' => '<b>BMI</b>',

    /*
    |--------------------------------------------------------------------------
    | Skin Color
    |--------------------------------------------------------------------------
    |
    | Choose a skin color for your admin panel. The available skin colors:
    | blue, black, purple, yellow, red, and green. Each skin also has a
    | ligth variant: blue-light, purple-light, purple-light, etc.
    |
    */

    'skin' => 'black',

    /*
    |--------------------------------------------------------------------------
    | Layout
    |--------------------------------------------------------------------------
    |
    | Choose a layout for your admin panel. The available layout options:
    | null, 'boxed', 'fixed', 'top-nav'. null is the default, top-nav
    | removes the sidebar and places your menu in the top navbar
    |
    */

    'layout' => null,

    /*
    |--------------------------------------------------------------------------
    | Collapse Sidebar
    |--------------------------------------------------------------------------
    |
    | Here we choose and option to be able to start with a collapsed side
    | bar. To adjust your sidebar layout simply set this  either true
    | this is compatible with layouts except top-nav layout option
    |
    */

    'collapse_sidebar' => false,

    /*
    |--------------------------------------------------------------------------
    | URLs
    |--------------------------------------------------------------------------
    |
    | Register here your dashboard, logout, login and register URLs. The
    | logout URL automatically sends a POST request in Laravel 5.3 or higher.
    | You can set the request to a GET or POST with logout_method.
    | Set register_url to null if you don't want a register link.
    |
    */

    'dashboard_url' => 'dashboard',

    'logout_url' => 'logout',

    'logout_method' => null,

    'login_url' => 'login',

    'register_url' => 'register',

    /*
    |--------------------------------------------------------------------------
    | Menu Items
    |--------------------------------------------------------------------------
    |
    | Specify your menu items to display in the left sidebar. Each menu item
    | should have a text and and a URL. You can also specify an icon from
    | Font Awesome. A string instead of an array represents a header in sidebar
    | layout. The 'can' is a filter on Laravel's built in Gate functionality.
    |
    */

    'menu' => [
        'АСОСИЙ НАВИГАЦИЯ',
        [
            'text' => 'Бош саҳифа',
            'url'  => 'dashboard',
            'icon' => 'tachometer',
            'can'  => 'default-list',
        ],
        // 'ФАРГОНА ВИЛОЯТИ',
        [
            'text'        => 'Фарғона тумани',
            'url'         => 'dashboard/farg-ona-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'farg-ona-tumani',
            'label'       => '8'
        ],
        [
            'text'        => 'Боғдод тумани',
            'url'         => 'dashboard/bog-dod-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'bog-dod-tumani',
            'label'       => '4'
        ],
        [
            'text'        => 'Бешариқ тумани',
            'url'         => 'dashboard/besharik-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'besharik-tumani',
            'label'       => '5'
        ],
        [
            'text'        => 'Бувайда тумани',
            'url'         => 'dashboard/buvayda-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'buvayda-tumani',
            'label'       => '3'
        ],
        [
            'text'        => 'Данғара тумани',
            'url'         => 'dashboard/dang-ara-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'dang-ara-tumani',
            'label'       => '6'
        ],
        [
            'text'        => 'Ёзовон тумани',
            'url'         => 'dashboard/yozovon-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'yozovon-tumani',
            'label'       => '9'
        ],
        [
            'text'        => 'Қўштепа тумани',
            'url'         => 'dashboard/k-ushtepa-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'k-ushtepa-tumani',
            'label'       => '4'
        ],
        [
            'text'        => 'Қува тумани',
            'url'         => 'dashboard/k-uva-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'k-uva-tumani',
            'label'       => '8'
        ],
        [
            'text'        => 'Олтариқ тумани',
            'url'         => 'dashboard/oltarik-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'oltarik-tumani',
            'label'       => '4'
        ],
        [
            'text'        => 'Риштон тумани',
            'url'         => 'dashboard/rishton-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'rishton-tumani',
            'label'       => '7'
        ],
        [
            'text'        => 'Тошлоқ тумани',
            'url'         => 'dashboard/toshlok-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'toshlok-tumani',
            'label'       => '6'
        ],
        [
            'text'        => 'Ўзбекистон тумани',
            'url'         => 'dashboard/uzbekiston-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'uzbekiston-tumani',
            'label'       => '2'
        ],
        [
            'text'        => 'Фурқат тумани',
            'url'         => 'dashboard/furk-at-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'furk-at-tumani',
            'label'       => '3'
        ],
        [
            'text'        => 'Учкўрик тумани',
            'url'         => 'dashboard/uchkurik-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'uchkurik-tumani',
            'label'       => '4'
        ],
        [
            'text'        => 'Сўҳ тумани',
            'url'         => 'dashboard/sukh-tumani',
            'icon'        => 'circle-thin',
            'can'         => 'sukh-tumani',
            'label'       => '4'
        ],
        [
            'text'        => 'Фарғона шахар',
            'url'         => 'dashboard/farg-ona-shahar',
            'icon'        => 'circle-thin',
            'can'         => 'farg-ona-shahar',
            'label'       => '5'
        ],
        [
            'text'        => 'Қувасой шахар',
            'url'         => 'dashboard/k-uvasoy-shahar',
            'icon'        => 'circle-thin',
            'can'         => 'k-uvasoy-shahar',
            'label'       => '6'
        ],
        [
            'text'        => 'Қўқон шахар',
            'url'         => 'dashboard/k-uk-on-shahar',
            'icon'        => 'circle-thin',
            'can'         => 'k-uk-on-shahar',
            'label'       => '6'
        ],
        [
            'text'        => 'Марғилон шахар',
            'url'         => 'dashboard/marg-ilon-shahar',
            'icon'        => 'circle-thin',
            'can'         => 'marg-ilon-shahar',
            'label'       => '6'
        ],
        'ПРОФИЛ СОЗЛАМАЛАРИ',
        [
            'text' => 'Паролни ўзгартириш',
            'url'  => 'dashboard/profile',
            'icon' => 'user',
            'can'  => 'default-list'
        ],
        [
            'text' => 'Бошқа Созламалар',
            'role' => 'Admin',
            'icon' => 'gear',
            'can'  => 'settings-list',
            'submenu' => [
                [
                    'text' => 'Фойдаланувчилар',
                    'role' => 'Admin',
                    'url'  => 'dashboard/users',
                    'icon' => 'users',
                    'can'  => 'user-list',
                ],
                [
                    'text' => 'Роллар',
                    'role' => 'Admin',
                    'url'  => 'dashboard/roles',
                    'icon' => 'magic',
                    'can'  => 'role-list',
                ],
                [
                    'text' => 'Рухсатномалар',
                    'role' => 'Admin',
                    'url'  => 'dashboard/permissions',
                    'icon' => 'key',
                    'can'  => 'perm-list',
                ],
                // [
                //     'text' => 'Вилоятлар',
                //     'role' => 'Admin',
                //     'url'  => 'dashboard',
                //     'icon' => 'list',
                    
                // ],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    |
    | Choose what filters you want to include for rendering the menu.
    | You can add your own filters to this array after you've created them.
    | You can comment out the GateFilter if you don't want to use Laravel's
    | built in Gate functionality
    |
    */

    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SubmenuFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Initialization
    |--------------------------------------------------------------------------
    |
    | Choose which JavaScript plugins should be included. At this moment,
    | only DataTables is supported as a plugin. Set the value to true
    | to include the JavaScript file from a CDN via a script tag.
    |
    */

    'plugins' => [
        'datatables' => true,
        'select2'    => true,
        'chartjs'    => true,
    ],
];