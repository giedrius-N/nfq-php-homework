<?php

// This file has been auto-generated by the Symfony Routing Component.

return [
    'article_edit' => [['id'], ['_controller' => 'App\\Controller\\EditController::article_edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/edit']], [], [], []],
    'home' => [[], ['_controller' => 'App\\Controller\\IndexController::list'], [], [['text', '/']], [], [], []],
    'article_view' => [['id'], ['_controller' => 'App\\Controller\\ViewController::view'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article']], [], [], []],
    '_preview_error' => [['code', '_format'], ['_controller' => 'error_controller::preview', '_format' => 'html'], ['code' => '\\d+'], [['variable', '.', '[^/]++', '_format', true], ['variable', '/', '\\d+', 'code', true], ['text', '/_error']], [], [], []],
    'app_edit' => [['id'], ['_controller' => 'App\\Controller\\EditController::article_edit'], [], [['variable', '/', '[^/]++', 'id', true], ['text', '/article-edit']], [], [], []],
];
