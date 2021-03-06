<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], []],
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], []],
    'about_browse' => [[], ['_controller' => 'App\\Controller\\AboutController::browse'], [], [['text', '/about/']], [], []],
    'admin_about_browse' => [[], ['_controller' => 'App\\Controller\\Admin\\AboutController::browse'], [], [['text', '/admin/about/']], [], []],
    'admin_about_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\AboutController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/about/edit']], [], []],
    'admin_type_job_add' => [[], ['_controller' => 'App\\Controller\\Admin\\JobController::add'], [], [['text', '/admin/type/job/add']], [], []],
    'admin_type_job_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\JobController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/type/job/edit']], [], []],
    'admin_type_job_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\JobController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/type/job/delete']], [], []],
    'admin_type_job_browse' => [[], ['_controller' => 'App\\Controller\\Admin\\JobController::browse'], [], [['text', '/admin/type/job/']], [], []],
    'admin_project_browse' => [[], ['_controller' => 'App\\Controller\\Admin\\ProjectController::browse'], [], [['text', '/admin/project']], [], []],
    'admin_project_add' => [[], ['_controller' => 'App\\Controller\\Admin\\ProjectController::add'], [], [['text', '/admin/project/add']], [], []],
    'admin_project_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ProjectController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/project/edit']], [], []],
    'admin_project_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\ProjectController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/project/delete']], [], []],
    'admin_type_school_add' => [[], ['_controller' => 'App\\Controller\\Admin\\SchoolController::add'], [], [['text', '/admin/type/school/add']], [], []],
    'admin_type_school_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SchoolController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/type/school/edit']], [], []],
    'admin_type_school_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\SchoolController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/type/school/delete']], [], []],
    'admin_tag_browse' => [[], ['_controller' => 'App\\Controller\\Admin\\TagController::browse'], [], [['text', '/admin/tag/']], [], []],
    'admin_tag_add' => [[], ['_controller' => 'App\\Controller\\Admin\\TagController::add'], [], [['text', '/admin/tag/add']], [], []],
    'admin_tag_edit' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TagController::edit'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/tag/edit']], [], []],
    'admin_tag_delete' => [['id'], ['_controller' => 'App\\Controller\\Admin\\TagController::delete'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true], ['text', '/admin/tag/delete']], [], []],
    'admin_type_browse' => [[], ['_controller' => 'App\\Controller\\Admin\\TypeController::browse'], [], [['text', '/admin/type/']], [], []],
    'admin_home' => [[], ['_controller' => 'App\\Controller\\AdminController::index'], [], [['text', '/admin/']], [], []],
    'main' => [[], ['_controller' => 'App\\Controller\\MainController::index'], [], [['text', '/main']], [], []],
    'project_browse' => [[], ['_controller' => 'App\\Controller\\ProjectController::browse'], [], [['text', '/']], [], []],
    'project_browse_by_type' => [['type'], ['_controller' => 'App\\Controller\\ProjectController::browseByType'], [], [['variable', '/', '[^/]++', 'type', true], ['text', '/type']], [], []],
    'project_browse_by_tag' => [['tag'], ['_controller' => 'App\\Controller\\ProjectController::browseByTag'], [], [['variable', '/', '[^/]++', 'tag', true], ['text', '/tag']], [], []],
    'project_read' => [['id'], ['_controller' => 'App\\Controller\\ProjectController::read'], ['id' => '\\d+'], [['variable', '/', '\\d+', 'id', true]], [], []],
    'app_login' => [[], ['_controller' => 'App\\Controller\\SecurityController::login'], [], [['text', '/login']], [], []],
    'app_logout' => [[], ['_controller' => 'App\\Controller\\SecurityController::logout'], [], [['text', '/logout']], [], []],
];
