<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Title & Branding
    |--------------------------------------------------------------------------
    */
    'title' => 'SmartPresence',
    'title_prefix' => '',
    'title_postfix' => '| Enterprise Attendance',

    /*
    |--------------------------------------------------------------------------
    | Favicon
    |--------------------------------------------------------------------------
    */
    'use_ico_only' => true,
    'use_full_favicon' => false,

    /*
    |--------------------------------------------------------------------------
    | Google Fonts
    |--------------------------------------------------------------------------
    */
    'google_fonts' => [
        'allowed' => true,
    ],

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Logo
    |--------------------------------------------------------------------------
    */
    'logo' => '<i class="fas fa-fingerprint me-2"></i><b>Smart</b>Presence',
    // 'logo_img' => 'public/logo.png',
    'logo_img_class' => 'brand-image img-circle elevation-3',
    'logo_img_xl' => null,
    'logo_img_xl_class' => 'brand-image-xs',
    'logo_img_alt' => 'SmartPresence Logo',

    /*
    |--------------------------------------------------------------------------
    | Authentication Logo
    |--------------------------------------------------------------------------
    */
    'auth_logo' => [
        'enabled' => true,
        'img' => [
            'path' => 'dist/img/smartpresence-logo.png',
            'alt' => 'SmartPresence',
            'class' => 'elevation-3',
            'width' => 70,
            'height' => 70,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Preloader Animation
    |--------------------------------------------------------------------------
    */
    'preloader' => [
        'enabled' => true,
        'mode' => 'fullscreen',
        'img' => [
            'path' => 'dist/img/smartpresence-logo.png',
            'alt' => 'Loading SmartPresence...',
            'effect' => 'animation__shake',
            'width' => 80,
            'height' => 80,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | User Menu Configuration
    |--------------------------------------------------------------------------
    */
    'usermenu_enabled' => true,
    'usermenu_header' => true,
    'usermenu_header_class' => 'bg-gradient-primary',
    'usermenu_image' => false,
    'usermenu_desc' => false,
    'usermenu_profile_url' => false,

    /*
    |--------------------------------------------------------------------------
    | Layout Settings
    |--------------------------------------------------------------------------
    */
    'layout_topnav' => null,
    'layout_boxed' => null,
    'layout_fixed_sidebar' => true,
    'layout_fixed_navbar' => true,
    'layout_fixed_footer' => true,
    'layout_dark_mode' => null,

    /*
    |--------------------------------------------------------------------------
    | Authentication View Classes
    |--------------------------------------------------------------------------
    */
    'classes_auth_card' => 'card-outline card-primary shadow-lg',
    'classes_auth_header' => 'bg-gradient-primary',
    'classes_auth_body' => '',
    'classes_auth_footer' => 'text-center',
    'classes_auth_icon' => 'text-primary',
    'classes_auth_btn' => 'btn-primary btn-flat',

    /*
    |--------------------------------------------------------------------------
    | Admin Panel Classes - Corporate Styling
    |--------------------------------------------------------------------------
    */
    'classes_body' => '',
    'classes_brand' => 'bg-white border-bottom',
    'classes_brand_text' => 'text-primary font-weight-bold',
    'classes_content_wrapper' => '',
    'classes_content_header' => 'bg-white border-bottom',
    'classes_content' => '',
    'classes_sidebar' => 'sidebar-light-primary elevation-3',
    'classes_sidebar_nav' => '',
    'classes_topnav' => 'navbar-white navbar-light border-bottom shadow-sm',
    'classes_topnav_nav' => 'navbar-expand',
    'classes_topnav_container' => 'container-fluid',

    /*
    |--------------------------------------------------------------------------
    | Sidebar Settings
    |--------------------------------------------------------------------------
    */
    'sidebar_mini' => 'lg',
    'sidebar_collapse' => false,
    'sidebar_collapse_auto_size' => false,
    'sidebar_collapse_remember' => true,
    'sidebar_collapse_remember_no_transition' => true,
    'sidebar_scrollbar_theme' => 'os-theme-light',
    'sidebar_scrollbar_auto_hide' => 'l',
    'sidebar_nav_accordion' => true,
    'sidebar_nav_animation_speed' => 300,

    /*
    |--------------------------------------------------------------------------
    | Control Sidebar (Right Sidebar)
    |--------------------------------------------------------------------------
    */
    'right_sidebar' => true,
    'right_sidebar_icon' => 'fas fa-cogs',
    'right_sidebar_theme' => 'light',
    'right_sidebar_slide' => true,
    'right_sidebar_push' => true,
    'right_sidebar_scrollbar_theme' => 'os-theme-light',
    'right_sidebar_scrollbar_auto_hide' => 'l',

    /*
    |--------------------------------------------------------------------------
    | URL Configuration - ROUTE-BASED (Not URLs)
    |--------------------------------------------------------------------------
    */
    'use_route_url' => true, 
    'dashboard_url' => 'home', 
    'logout_url' => 'logout',
    'login_url' => 'login',
    'register_url' => 'register',
    'password_reset_url' => 'password.request',
    'password_email_url' => 'password.email',
    'profile_url' => 'profile',
    'disable_darkmode_routes' => false,

    /*
    |--------------------------------------------------------------------------
    | Laravel Asset Bundling
    |--------------------------------------------------------------------------
    */
    'laravel_asset_bundling' => false,
    'laravel_css_path' => 'css/app.css',
    'laravel_js_path' => 'js/app.js',

    /*
    |--------------------------------------------------------------------------
    | Menu Items - Professional Corporate Navigation
    |--------------------------------------------------------------------------
    */
    'menu' => [
        // === TOP NAVBAR ITEMS ===
        
        // Search (Left side)
        [
            'type' => 'navbar-search',
            'text' => 'Search',
            'placeholder' => 'Search employees, dates, reports...',
            'topnav_right' => false,
            'method' => 'GET',
            'action' => 'search',
            'icon' => 'fas fa-search',
        ],
        
        // Theme Toggle Button (Right side)
        [
            'text' => '<i class="fas fa-moon" id="theme-icon"></i>',
            'href' => '#',
            'topnav_right' => true,
            'icon' => 'fas fa-moon',
            'id' => 'theme-toggle-btn',
            'title' => 'Toggle Dark Mode',
            'class' => 'nav-link',
        ],
        
        // Fullscreen Toggle
        [
            'type' => 'fullscreen-widget',
            'topnav_right' => true,
        ],
        
        // === NOTIFICATIONS DROPDOWN ===
        [
            'text' => '',
            'href' => '#',
            'topnav_right' => true,
            'icon' => 'fas fa-bell',
            'badge' => 3,
            'badge_color' => 'danger',
            'class' => 'nav-link dropdown-toggle',
            'data-toggle' => 'dropdown',
            'submenu' => [
                [
                    'type' => 'header',
                    'text' => 'Notifications',
                ],
                [
                    'text' => '<i class="fas fa-check-circle text-success mr-2"></i> New check-in: Sarah (9:02 AM)',
                    'href' => '#',
                    'icon' => 'fas fa-check-circle text-success',
                ],
                [
                    'text' => '<i class="fas fa-clock text-warning mr-2"></i> Leave request pending: Mike',
                    'href' => '#',
                    'icon' => 'fas fa-clock text-warning',
                ],
                [
                    'text' => '<i class="fas fa-download text-info mr-2"></i> System update available',
                    'href' => '#',
                    'icon' => 'fas fa-download text-info',
                ],
                [
                    'type' => 'divider',
                ],
                [
                    'text' => 'View all notifications',
                    'href' => '#',
                    'icon' => 'fas fa-arrow-right',
                    'class' => 'dropdown-item-footer',
                ],
            ],
        ],
        
        // === MESSAGES DROPDOWN ===
        [
            'text' => '',
            'href' => '#',
            'topnav_right' => true,
            'icon' => 'fas fa-comments',
            'badge' => 2,
            'badge_color' => 'info',
            'class' => 'nav-link dropdown-toggle',
            'data-toggle' => 'dropdown',
            'submenu' => [
                [
                    'type' => 'header',
                    'text' => 'Messages',
                ],
                [
                    'text' => '<i class="fas fa-envelope text-primary mr-2"></i> HR Team: Policy update',
                    'href' => '#',
                    'icon' => 'fas fa-envelope text-primary',
                ],
                [
                    'text' => '<i class="fas fa-envelope text-secondary mr-2"></i> Admin: System maintenance',
                    'href' => '#',
                    'icon' => 'fas fa-envelope text-secondary',
                ],
                [
                    'type' => 'divider',
                ],
                [
                    'text' => 'View all messages',
                    'href' => '#',
                    'icon' => 'fas fa-arrow-right',
                    'class' => 'dropdown-item-footer',
                ],
            ],
        ],

        // === SIDEBAR MENU ITEMS ===
        
        // Dashboard
        [
            'text' => 'Dashboard',
            'route' => 'home',
            'icon' => 'fas fa-tachometer-alt',
            'active' => ['home'],
        ],

        // === ATTENDANCE SECTION ===
        [
            'header' => 'ATTENDANCE',
            'can' => 'view-attendance',
        ],
        [
            'text' => 'Check In/Out',
            'route' => '',
            'icon' => 'fas fa-clock',
            'active' => ['attendance.checkin', 'attendance.checkout'],
        ],
        [
            'text' => 'My Attendance',
            'route' => '',
            'icon' => 'fas fa-user-clock',
            'active' => ['attendance.my'],
        ],
        [
            'text' => 'All Attendance',
            'route' => '',
            'icon' => 'fas fa-list',
            'active' => ['attendance.index', 'attendance.show', 'attendance.edit'],
            'can' => 'view-all-attendance',
        ],
        [
            'text' => 'Attendance Reports',
            'route' => '',
            'icon' => 'fas fa-file-alt',
            'active' => ['reports.attendance'],
            'can' => 'view-reports',
        ],

        // === LEAVE MANAGEMENT ===
        [
            'header' => 'LEAVE MANAGEMENT',
        ],
        [
            'text' => 'Apply Leave',
            'route' => '',
            'icon' => 'fas fa-calendar-plus',
            'active' => ['leaves.create'],
        ],
        [
            'text' => 'My Leaves',
            'route' => '',
            'icon' => 'fas fa-calendar-check',
            'active' => ['leaves.index', 'leaves.show'],
        ],
        [
            'text' => 'Pending Approvals',
            'route' => '',
            'icon' => 'fas fa-hourglass-half',
            'active' => ['leaves.pending'],
            'label' => 'pending_leaves',
            'label_color' => 'danger',
            'can' => 'approve-leaves',
        ],
        [
            'text' => 'Leave Reports',
            'route' => '',
            'icon' => 'fas fa-chart-pie',
            'active' => ['reports.leaves'],
            'can' => 'view-reports',
        ],

        // === REPORTS & ANALYTICS (Admin/Manager) ===
        [
            'header' => 'REPORTS & ANALYTICS',
            'can' => 'view-reports',
        ],
        [
            'text' => 'Daily Report',
            'route' => '',
            'icon' => 'fas fa-chart-line',
            'active' => ['reports.daily'],
        ],
        [
            'text' => 'Monthly Report',
            'route' => '',
            'icon' => 'fas fa-chart-bar',
            'active' => ['reports.monthly'],
        ],
        [
            'text' => 'Employee Report',
            'route' => '',
            'icon' => 'fas fa-users-chart',
            'active' => ['reports.employee'],
        ],
        [
            'text' => 'Export Data',
            'route' => '',
            'icon' => 'fas fa-file-export',
            'active' => ['reports.export'],
        ],

        // === USER MANAGEMENT (Admin Only) ===
        [
            'header' => 'ADMINISTRATION',
            'can' => 'manage-users',
        ],
        [
            'text' => 'All Employees',
            'route' => '',
            'icon' => 'fas fa-users',
            'active' => ['users.index', 'users.show', 'users.edit'],
        ],
        [
            'text' => 'Add Employee',
            'route' => '',
            'icon' => 'fas fa-user-plus',
            'active' => ['users.create'],
        ],
        [
            'text' => 'Departments',
            'route' => '',
            'icon' => 'fas fa-building',
            'active' => ['departments.*'],
        ],
        [
            'text' => 'Roles & Permissions',
            'route' => '',
            'icon' => 'fas fa-user-shield',
            'active' => ['roles.*'],
        ],

        // === SETTINGS ===
        [
            'header' => 'SETTINGS',
        ],
        [
            'text' => 'My Profile',
            'route' => '',
            'icon' => 'fas fa-user-circle',
            'active' => ['profile', 'profile.edit'],
        ],
        [
            'text' => 'Change Password',
            'route' => '',
            'icon' => 'fas fa-key',
            'active' => ['password.change'],
        ],
        [
            'text' => 'System Settings',
            'route' => '',
            'icon' => 'fas fa-cog',
            'active' => ['settings'],
            'can' => 'manage-settings',
        ],

        // === QUICK ACTIONS (Right Sidebar) ===
        [
            'header' => ' QUICK ACTIONS',
            'right_sidebar' => true,
        ],
        [
            'text' => 'Check In Now',
            'route' => '',
            'icon' => 'fas fa-sign-in-alt',
            'target' => '_self',
            'right_sidebar' => true,
            'btn_class' => 'btn-success btn-block',
        ],
        [
            'text' => 'Check Out Now',
            'route' => '',
            'icon' => 'fas fa-sign-out-alt',
            'target' => '_self',
            'right_sidebar' => true,
            'btn_class' => 'btn-danger btn-block',
        ],
        [
            'text' => 'Apply Leave',
            'route' => '',
            'icon' => 'fas fa-plane-departure',
            'target' => '_self',
            'right_sidebar' => true,
            'btn_class' => 'btn-warning btn-block',
        ],
        [
            'text' => 'View Reports',
            'route' => '',
            'icon' => 'fas fa-chart-bar',
            'target' => '_self',
            'right_sidebar' => true,
            'btn_class' => 'btn-info btn-block',
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Menu Filters
    |--------------------------------------------------------------------------
    */
    'filters' => [
        JeroenNoten\LaravelAdminLte\Menu\Filters\GateFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\HrefFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\SearchFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ActiveFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\ClassesFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\LangFilter::class,
        JeroenNoten\LaravelAdminLte\Menu\Filters\DataFilter::class,
    ],

    /*
    |--------------------------------------------------------------------------
    | Plugins Configuration
    |--------------------------------------------------------------------------
    */
    'plugins' => [
        'Datatables' => [
            'active' => true,
            'files' => [
                ['type' => 'js', 'asset' => true, 'location' => 'vendor/datatables/jquery.dataTables.min.js'],
                ['type' => 'js', 'asset' => true, 'location' => 'vendor/datatables/dataTables.bootstrap4.min.js'],
                ['type' => 'js', 'asset' => true, 'location' => 'vendor/datatables/dataTables.responsive.min.js'],
                ['type' => 'css', 'asset' => true, 'location' => 'vendor/datatables/dataTables.bootstrap4.min.css'],
                ['type' => 'css', 'asset' => true, 'location' => 'vendor/datatables/responsive.bootstrap4.min.css'],
            ],
        ],
        'Select2' => [
            'active' => true,
            'files' => [
                ['type' => 'js', 'asset' => true, 'location' => 'vendor/select2/js/select2.full.min.js'],
                ['type' => 'css', 'asset' => true, 'location' => 'vendor/select2/css/select2.min.css'],
            ],
        ],
        'Chartjs' => [
            'active' => true,
            'files' => [
                ['type' => 'js', 'asset' => true, 'location' => 'vendor/chartjs/Chart.bundle.min.js'],
            ],
        ],
        'Sweetalert2' => [
            'active' => true,
            'files' => [
                ['type' => 'js', 'asset' => true, 'location' => 'vendor/sweetalert2/sweetalert2.all.min.js'],
                ['type' => 'css', 'asset' => true, 'location' => 'vendor/sweetalert2/sweetalert2.min.css'],
            ],
        ],
        'Daterangepicker' => [
            'active' => true,
            'files' => [
                ['type' => 'js', 'asset' => true, 'location' => 'vendor/daterangepicker/moment.min.js'],
                ['type' => 'js', 'asset' => true, 'location' => 'vendor/daterangepicker/daterangepicker.js'],
                ['type' => 'css', 'asset' => true, 'location' => 'vendor/daterangepicker/daterangepicker.css'],
            ],
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | IFrame Mode Configuration
    |--------------------------------------------------------------------------
    */
    'iframe' => [
        'default_tab' => ['url' => 'home', 'title' => 'Dashboard'],
        'buttons' => [
            'close' => true, 'close_all' => true, 'close_all_other' => true,
            'scroll_left' => true, 'scroll_right' => true, 'fullscreen' => true,
        ],
        'options' => [
            'loading_screen' => 1000,
            'auto_show_new_tab' => true,
            'use_navbar_items' => true,
        ],
    ],

    /*
    |--------------------------------------------------------------------------
    | Livewire Support
    |--------------------------------------------------------------------------
    */
    'livewire' => false,

    /*
    |--------------------------------------------------------------------------
    | Custom Configuration for SmartPresence
    |--------------------------------------------------------------------------
    */
    'custom' => [
        'office_start_time' => '09:00',
        'office_end_time' => '18:00',
        'grace_period_minutes' => 15,
        'enable_location_check' => true,
        'office_latitude' => env('OFFICE_LATITUDE', 23.8103),
        'office_longitude' => env('OFFICE_LONGITUDE', 90.4125),
        'location_radius_km' => 0.5,
        'send_attendance_reminder' => true,
        'reminder_time' => '17:30',
        'export_formats' => ['pdf', 'excel', 'csv'],
        'developer' => [
            'name' => 'Mustafizur Rahman',
            'github' => 'https://github.com/mustafiz06',
            'email' => 'mustafiz@example.com',
        ],
    ],

];
