<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    '_wdt' => [['token'], ['_controller' => 'web_profiler.controller.profiler::toolbarAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_wdt']], [], [], []],
    '_profiler_home' => [[], ['_controller' => 'web_profiler.controller.profiler::homeAction'], [], [['text', '/_profiler/']], [], [], []],
    '_profiler_search' => [[], ['_controller' => 'web_profiler.controller.profiler::searchAction'], [], [['text', '/_profiler/search']], [], [], []],
    '_profiler_search_bar' => [[], ['_controller' => 'web_profiler.controller.profiler::searchBarAction'], [], [['text', '/_profiler/search_bar']], [], [], []],
    '_profiler_phpinfo' => [[], ['_controller' => 'web_profiler.controller.profiler::phpinfoAction'], [], [['text', '/_profiler/phpinfo']], [], [], []],
    '_profiler_search_results' => [['token'], ['_controller' => 'web_profiler.controller.profiler::searchResultsAction'], [], [['text', '/search/results'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_open_file' => [[], ['_controller' => 'web_profiler.controller.profiler::openAction'], [], [['text', '/_profiler/open']], [], [], []],
    '_profiler' => [['token'], ['_controller' => 'web_profiler.controller.profiler::panelAction'], [], [['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_router' => [['token'], ['_controller' => 'web_profiler.controller.router::panelAction'], [], [['text', '/router'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::body'], [], [['text', '/exception'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_profiler_exception_css' => [['token'], ['_controller' => 'web_profiler.controller.exception_panel::stylesheet'], [], [['text', '/exception.css'], ['variable', '/', '[^/]++', 'token', true], ['text', '/_profiler']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'course' => [[], ['_controller' => 'App\\Controller\\CourseController::index'], [], [['text', '/course']], [], [], []],
    'event' => [[], ['_controller' => 'App\\Controller\\EventController::index'], [], [['text', '/event']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\HomeController::index'], [], [['text', '/']], [], [], []],
    'student_class' => [[], ['_controller' => 'App\\Controller\\StudentClassController::index'], [], [['text', '/student/class']], [], [], []],
    'student' => [[], ['_controller' => 'App\\Controller\\StudentController::index'], [], [['text', '/student']], [], [], []],
    'student_detail' => [['id'], ['_controller' => 'App\\Controller\\StudentController::studentDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/student/detail']], [], [], []],
    'student_edit' => [['id'], ['_controller' => 'App\\Controller\\StudentController::studentEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/student/edit']], [], [], []],
    'student_delete' => [['id'], ['_controller' => 'App\\Controller\\StudentController::studentDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/student/delete']], [], [], []],
    'teacher' => [[], ['_controller' => 'App\\Controller\\TeacherController::teacherIndex'], [], [['text', '/teacher']], [], [], []],
    'teacher_detail' => [['id'], ['_controller' => 'App\\Controller\\TeacherController::teacherDetail'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/teacher/detail']], [], [], []],
    'teacher_edit' => [['id'], ['_controller' => 'App\\Controller\\TeacherController::teacherEdit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/teacher/edit']], [], [], []],
    'teacher_delete' => [['id'], ['_controller' => 'App\\Controller\\TeacherController::teacherDelete'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/teacher/delete']], [], [], []],
    'tuition' => [[], ['_controller' => 'App\\Controller\\TuitionController::index'], [], [['text', '/tuition']], [], [], []],
];