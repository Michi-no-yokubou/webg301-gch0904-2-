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
        '/course' => [[['_route' => 'course', '_controller' => 'App\\Controller\\CourseController::index'], null, null, null, false, false, null]],
        '/event' => [[['_route' => 'event', '_controller' => 'App\\Controller\\EventController::index'], null, null, null, false, false, null]],
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\HomeController::index'], null, null, null, false, false, null]],
        '/student/class' => [[['_route' => 'student_class', '_controller' => 'App\\Controller\\StudentClassController::index'], null, null, null, false, false, null]],
        '/student' => [[['_route' => 'student', '_controller' => 'App\\Controller\\StudentController::index'], null, null, null, false, false, null]],
        '/teacher' => [[['_route' => 'teacher', '_controller' => 'App\\Controller\\TeacherController::teacherIndex'], null, null, null, false, false, null]],
        '/tuition' => [[['_route' => 'tuition', '_controller' => 'App\\Controller\\TuitionController::index'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_(?'
                    .'|wdt/([^/]++)(*:24)'
                    .'|profiler/([^/]++)(?'
                        .'|/(?'
                            .'|search/results(*:69)'
                            .'|router(*:82)'
                            .'|exception(?'
                                .'|(*:101)'
                                .'|\\.css(*:114)'
                            .')'
                        .')'
                        .'|(*:124)'
                    .')'
                    .'|error/(\\d+)(?:\\.([^/]++))?(*:159)'
                .')'
                .'|/student/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:198)'
                        .'|lete/([^/]++)(*:219)'
                    .')'
                    .'|edit/([^/]++)(*:241)'
                .')'
                .'|/teacher/(?'
                    .'|de(?'
                        .'|tail/([^/]++)(*:280)'
                        .'|lete/([^/]++)(*:301)'
                    .')'
                    .'|edit/([^/]++)(*:323)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        24 => [[['_route' => '_wdt', '_controller' => 'web_profiler.controller.profiler::toolbarAction'], ['token'], null, null, false, true, null]],
        69 => [[['_route' => '_profiler_search_results', '_controller' => 'web_profiler.controller.profiler::searchResultsAction'], ['token'], null, null, false, false, null]],
        82 => [[['_route' => '_profiler_router', '_controller' => 'web_profiler.controller.router::panelAction'], ['token'], null, null, false, false, null]],
        101 => [[['_route' => '_profiler_exception', '_controller' => 'web_profiler.controller.exception_panel::body'], ['token'], null, null, false, false, null]],
        114 => [[['_route' => '_profiler_exception_css', '_controller' => 'web_profiler.controller.exception_panel::stylesheet'], ['token'], null, null, false, false, null]],
        124 => [[['_route' => '_profiler', '_controller' => 'web_profiler.controller.profiler::panelAction'], ['token'], null, null, false, true, null]],
        159 => [[['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        198 => [[['_route' => 'student_detail', '_controller' => 'App\\Controller\\StudentController::studentDetail'], ['id'], null, null, false, true, null]],
        219 => [[['_route' => 'student_delete', '_controller' => 'App\\Controller\\StudentController::studentDelete'], ['id'], null, null, false, true, null]],
        241 => [[['_route' => 'student_edit', '_controller' => 'App\\Controller\\StudentController::studentEdit'], ['id'], null, null, false, true, null]],
        280 => [[['_route' => 'teacher_detail', '_controller' => 'App\\Controller\\TeacherController::teacherDetail'], ['id'], null, null, false, true, null]],
        301 => [[['_route' => 'teacher_delete', '_controller' => 'App\\Controller\\TeacherController::teacherDelete'], ['id'], null, null, false, true, null]],
        323 => [
            [['_route' => 'teacher_edit', '_controller' => 'App\\Controller\\TeacherController::teacherEdit'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
