<?php return array (
  'title' => 'Admin',
  'title_prefix' => '',
  'title_postfix' => '',
  'logo' => '<b>Admin</b>',
  'logo_mini' => '<b>BMI</b>',
  'skin' => 'black',
  'layout' => NULL,
  'collapse_sidebar' => false,
  'dashboard_url' => 'dashboard',
  'logout_url' => 'logout',
  'logout_method' => NULL,
  'login_url' => 'login',
  'register_url' => 'register',
  'menu' => 
  array (
    0 => 'АСОСИЙ НАВИГАЦИЯ',
    1 => 
    array (
      'text' => 'Бош саҳифа',
      'url' => 'dashboard/main',
      'icon' => 'tachometer',
      'can' => 'default-list',
    ),
    2 => 
    array (
      'text' => 'Фарғона тумани',
      'url' => 'dashboard/farg-ona-tumani',
      'icon' => 'circle-thin',
      'can' => 'farg-ona-tumani',
    ),
    3 => 
    array (
      'text' => 'Боғдод тумани',
      'url' => 'dashboard/bog-dod-tumani',
      'icon' => 'circle-thin',
      'can' => 'bog-dod-tumani',
    ),
    4 => 
    array (
      'text' => 'Бешариқ тумани',
      'url' => 'dashboard/besharik-tumani',
      'icon' => 'circle-thin',
      'can' => 'besharik-tumani',
    ),
    5 => 
    array (
      'text' => 'Бувайда тумани',
      'url' => 'dashboard/buvayda-tumani',
      'icon' => 'circle-thin',
      'can' => 'buvayda-tumani',
    ),
    6 => 
    array (
      'text' => 'Данғара тумани',
      'url' => 'dashboard/dang-ara-tumani',
      'icon' => 'circle-thin',
      'can' => 'dang-ara-tumani',
    ),
    7 => 
    array (
      'text' => 'Ёзовон тумани',
      'url' => 'dashboard/yozovon-tumani',
      'icon' => 'circle-thin',
      'can' => 'yozovon-tumani',
    ),
    8 => 
    array (
      'text' => 'Қўштепа тумани',
      'url' => 'dashboard/k-ushtepa-tumani',
      'icon' => 'circle-thin',
      'can' => 'k-ushtepa-tumani',
    ),
    9 => 
    array (
      'text' => 'Қува тумани',
      'url' => 'dashboard/k-uva-tumani',
      'icon' => 'circle-thin',
      'can' => 'k-uva-tumani',
    ),
    10 => 
    array (
      'text' => 'Олтариқ тумани',
      'url' => 'dashboard/oltarik-tumani',
      'icon' => 'circle-thin',
      'can' => 'oltarik-tumani',
    ),
    11 => 
    array (
      'text' => 'Риштон тумани',
      'url' => 'dashboard/rishton-tumani',
      'icon' => 'circle-thin',
      'can' => 'rishton-tumani',
    ),
    12 => 
    array (
      'text' => 'Тошлоқ тумани',
      'url' => 'dashboard/toshlok-tumani',
      'icon' => 'circle-thin',
      'can' => 'toshlok-tumani',
    ),
    13 => 
    array (
      'text' => 'Ўзбекистон тумани',
      'url' => 'dashboard/uzbekiston-tumani',
      'icon' => 'circle-thin',
      'can' => 'uzbekiston-tumani',
    ),
    14 => 
    array (
      'text' => 'Фурқат тумани',
      'url' => 'dashboard/furk-at-tumani',
      'icon' => 'circle-thin',
      'can' => 'furk-at-tumani',
    ),
    15 => 
    array (
      'text' => 'Учкўрик тумани',
      'url' => 'dashboard/uchkurik-tumani',
      'icon' => 'circle-thin',
      'can' => 'uchkurik-tumani',
    ),
    16 => 
    array (
      'text' => 'Сўҳ тумани',
      'url' => 'dashboard/sukh-tumani',
      'icon' => 'circle-thin',
      'can' => 'sukh-tumani',
    ),
    17 => 
    array (
      'text' => 'Фарғона шахар',
      'url' => 'dashboard/farg-ona-shahar',
      'icon' => 'circle-thin',
      'can' => 'farg-ona-shahar',
    ),
    18 => 
    array (
      'text' => 'Қувасой шахар',
      'url' => 'dashboard/k-uvasoy-shahar',
      'icon' => 'circle-thin',
      'can' => 'k-uvasoy-shahar',
    ),
    19 => 
    array (
      'text' => 'Қўқон шахар',
      'url' => 'dashboard/k-uk-on-shahar',
      'icon' => 'circle-thin',
      'can' => 'k-uk-on-shahar',
    ),
    20 => 
    array (
      'text' => 'Марғилон шахар',
      'url' => 'dashboard/marg-ilon-shahar',
      'icon' => 'circle-thin',
      'can' => 'marg-ilon-shahar',
    ),
    21 => 'ПРОФИЛ СОЗЛАМАЛАРИ',
    22 => 
    array (
      'text' => 'Паролни ўзгартириш',
      'url' => 'dashboard/profile',
      'icon' => 'user',
      'can' => 'default-list',
    ),
    23 => 
    array (
      'text' => 'Бошқа Созламалар',
      'role' => 'Admin',
      'icon' => 'gear',
      'can' => 'settings-list',
      'submenu' => 
      array (
        0 => 
        array (
          'text' => 'Фойдаланувчилар',
          'role' => 'Admin',
          'url' => 'dashboard/users',
          'icon' => 'users',
          'can' => 'user-list',
        ),
        1 => 
        array (
          'text' => 'Роллар',
          'role' => 'Admin',
          'url' => 'dashboard/roles',
          'icon' => 'magic',
          'can' => 'role-list',
        ),
        2 => 
        array (
          'text' => 'Рухсатномалар',
          'role' => 'Admin',
          'url' => 'dashboard/permissions',
          'icon' => 'key',
          'can' => 'perm-list',
        ),
      ),
    ),
  ),
  'filters' => 
  array (
    0 => 'JeroenNoten\\LaravelAdminLte\\Menu\\Filters\\HrefFilter',
    1 => 'JeroenNoten\\LaravelAdminLte\\Menu\\Filters\\ActiveFilter',
    2 => 'JeroenNoten\\LaravelAdminLte\\Menu\\Filters\\SubmenuFilter',
    3 => 'JeroenNoten\\LaravelAdminLte\\Menu\\Filters\\ClassesFilter',
    4 => 'JeroenNoten\\LaravelAdminLte\\Menu\\Filters\\GateFilter',
  ),
  'plugins' => 
  array (
    'datatables' => true,
    'select2' => true,
    'chartjs' => true,
  ),
);