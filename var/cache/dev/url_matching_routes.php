<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/_profiler' => [[['_route' => '_profiler_home', '_controller' => 'web_profiler.controller.profiler::homeAction'], null, null, null, true, false, null]],
        '/_profiler/search' => [[['_route' => '_profiler_search', '_controller' => 'web_profiler.controller.profiler::searchAction'], null, null, null, false, false, null]],
        '/_profiler/search_bar' => [[['_route' => '_profiler_search_bar', '_controller' => 'web_profiler.controller.profiler::searchBarAction'], null, null, null, false, false, null]],
        '/_profiler/phpinfo' => [[['_route' => '_profiler_phpinfo', '_controller' => 'web_profiler.controller.profiler::phpinfoAction'], null, null, null, false, false, null]],
        '/_profiler/open' => [[['_route' => '_profiler_open_file', '_controller' => 'web_profiler.controller.profiler::openAction'], null, null, null, false, false, null]],
        '/about' => [[['_route' => 'about_browse', '_controller' => 'App\\Controller\\AboutController::browse'], null, null, null, true, false, null]],
        '/admin/about' => [[['_route' => 'admin_about_browse', '_controller' => 'App\\Controller\\Admin\\AboutController::browse'], null, null, null, true, false, null]],
        '/admin/type/job/add' => [[['_route' => 'admin_type_job_add', '_controller' => 'App\\Controller\\Admin\\JobController::add'], null, null, null, false, false, null]],
        '/admin/type/job' => [[['_route' => 'admin_type_job_browse', '_controller' => 'App\\Controller\\Admin\\JobController::browse'], null, null, null, true, false, null]],
        '/admin/project' => [[['_route' => 'admin_project_browse', '_controller' => 'App\\Controller\\Admin\\ProjectController::browse'], null, null, null, false, false, null]],
        '/admin/project/add' => [[['_route' => 'admin_project_add', '_controller' => 'App\\Controller\\Admin\\ProjectController::add'], null, null, null, false, false, null]],
        '/admin/type/school/add' => [[['_route' => 'admin_type_school_add', '_controller' => 'App\\Controller\\Admin\\SchoolController::add'], null, null, null, false, false, null]],
        '/admin/tag' => [[['_route' => 'admin_tag_browse', '_controller' => 'App\\Controller\\Admin\\TagController::browse'], null, null, null, true, false, null]],
        '/admin/tag/add' => [[['_route' => 'admin_tag_add', '_controller' => 'App\\Controller\\Admin\\TagController::add'], null, null, null, false, false, null]],
        '/admin/type' => [[['_route' => 'admin_type_browse', '_controller' => 'App\\Controller\\Admin\\TypeController::browse'], null, null, null, true, false, null]],
        '/admin' => [[['_route' => 'admin_home', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, true, false, null]],
        '/main' => [[['_route' => 'main', '_controller' => 'App\\Controller\\MainController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'project_browse', '_controller' => 'App\\Controller\\ProjectController::browse'], null, null, null, false, false, null]],
        '/login' => [[['_route' => 'app_login', '_controller' => 'App\\Controller\\SecurityController::login'], null, null, null, false, false, null]],
        '/logout' => [[['_route' => 'app_logout', '_controller' => 'App\\Controller\\SecurityController::logout'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:38)'
                    .'|wdt/([^/]++)(*:57)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:102)'
                            .'|router(*:116)'
                            .'|exception(?'
                                .'|(*:136)'
                                .'|\\.css(*:149)'
                            .')'
                        .')'
                        .'|(*:159)'
                    .')'
                .')'
                .'|/admin/(?'
                    .'|about/edit/(\\d+)(*:195)'
                    .'|t(?'
                        .'|ype/(?'
                            .'|job/(?'
                                .'|edit/(\\d+)(*:231)'
                                .'|delete/(\\d+)(*:251)'
                            .')'
                            .'|school/(?'
                                .'|edit/(\\d+)(*:280)'
                                .'|delete/(\\d+)(*:300)'
                            .')'
                        .')'
                        .'|ag/(?'
                            .'|edit/(\\d+)(*:326)'
                            .'|delete/(\\d+)(*:346)'
                        .')'
                    .')'
                    .'|project/(?'
                        .'|edit/(\\d+)(*:377)'
                        .'|delete/(\\d+)(*:397)'
                    .')'
                .')'
                .'|/t(?'
                    .'|ype/([^/]++)(*:424)'
                    .'|ag/([^/]++)(*:443)'
                .')'
                .'|/(\\d+)(*:458)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        38 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        57 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        102 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        116 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        136 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        149 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        159 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        195 => [[['_route' => 'admin_about_edit', '_controller' => 'App\\Controller\\Admin\\AboutController::edit'], ['id'], null, null, false, true, null]],
        231 => [[['_route' => 'admin_type_job_edit', '_controller' => 'App\\Controller\\Admin\\JobController::edit'], ['id'], null, null, false, true, null]],
        251 => [[['_route' => 'admin_type_job_delete', '_controller' => 'App\\Controller\\Admin\\JobController::delete'], ['id'], null, null, false, true, null]],
        280 => [[['_route' => 'admin_type_school_edit', '_controller' => 'App\\Controller\\Admin\\SchoolController::edit'], ['id'], null, null, false, true, null]],
        300 => [[['_route' => 'admin_type_school_delete', '_controller' => 'App\\Controller\\Admin\\SchoolController::delete'], ['id'], null, null, false, true, null]],
        326 => [[['_route' => 'admin_tag_edit', '_controller' => 'App\\Controller\\Admin\\TagController::edit'], ['id'], null, null, false, true, null]],
        346 => [[['_route' => 'admin_tag_delete', '_controller' => 'App\\Controller\\Admin\\TagController::delete'], ['id'], null, null, false, true, null]],
        377 => [[['_route' => 'admin_project_edit', '_controller' => 'App\\Controller\\Admin\\ProjectController::edit'], ['id'], null, null, false, true, null]],
        397 => [[['_route' => 'admin_project_delete', '_controller' => 'App\\Controller\\Admin\\ProjectController::delete'], ['id'], null, null, false, true, null]],
        424 => [[['_route' => 'project_browse_by_type', '_controller' => 'App\\Controller\\ProjectController::browseByType'], ['type'], null, null, false, true, null]],
        443 => [[['_route' => 'project_browse_by_tag', '_controller' => 'App\\Controller\\ProjectController::browseByTag'], ['tag'], null, null, false, true, null]],
        458 => [
            [['_route' => 'project_read', '_controller' => 'App\\Controller\\ProjectController::read'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
