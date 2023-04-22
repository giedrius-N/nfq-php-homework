<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [[['_route' => 'home', '_controller' => 'App\\Controller\\IndexController::list'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/edit/([^/]++)(*:21)'
                .'|/article(?'
                    .'|/([^/]++)(*:48)'
                    .'|\\-edit/([^/]++)(*:70)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:106)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        21 => [[['_route' => 'article_edit', '_controller' => 'App\\Controller\\EditController::article_edit'], ['id'], null, null, false, true, null]],
        48 => [[['_route' => 'article_view', '_controller' => 'App\\Controller\\ViewController::view'], ['id'], null, null, false, true, null]],
        70 => [[['_route' => 'app_edit', '_controller' => 'App\\Controller\\EditController::article_edit'], ['id'], null, null, false, true, null]],
        106 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
