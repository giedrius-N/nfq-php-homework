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
                .'|/article(?'
                    .'|/([^/]++)(*:27)'
                    .'|\\-edit/([^/]++)(*:49)'
                .')'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:85)'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        27 => [[['_route' => 'article_view', '_controller' => 'App\\Controller\\ViewController::view'], ['id'], null, null, false, true, null]],
        49 => [[['_route' => 'app_edit', '_controller' => 'App\\Controller\\EditController::article_edit'], ['id'], null, null, false, true, null]],
        85 => [
            [['_route' => '_preview_error', '_controller' => 'error_controller::preview', '_format' => 'html'], ['code', '_format'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
