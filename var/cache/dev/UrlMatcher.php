<?php

/**
 * This file has been auto-generated
 * by the Symfony Routing Component.
 */

return [
    false, // $matchHost
    [ // $staticRoutes
        '/' => [
            [['_route' => 'invoice_list', '_controller' => 'App\\Controller\\InvoiceController::index'], null, null, null, false, false, null],
            [['_route' => 'index', '_controller' => 'App\\Controller\\InvoiceController::index'], null, null, null, false, false, null],
        ],
        '/invoice/new/step1' => [[['_route' => 'invoice_new_step1', '_controller' => 'App\\Controller\\InvoiceController::newStep1'], null, null, null, false, false, null]],
    ],
    [ // $regexpList
        0 => '{^(?'
                .'|/_error/(\\d+)(?:\\.([^/]++))?(*:35)'
                .'|/invoice/(?'
                    .'|new/step2/([^/]++)(*:72)'
                    .'|edit/(?'
                        .'|header/([^/]++)(*:102)'
                        .'|body/([^/]++)(*:123)'
                    .')'
                    .'|delete/([^/]++)(*:147)'
                    .'|([^/]++)(*:163)'
                .')'
            .')/?$}sDu',
    ],
    [ // $dynamicRoutes
        35 => [[['_route' => '_twig_error_test', '_controller' => 'twig.controller.preview_error::previewErrorPageAction', '_format' => 'html'], ['code', '_format'], null, null, false, true, null]],
        72 => [[['_route' => 'invoice_new_step2', '_controller' => 'App\\Controller\\InvoiceController::newStep2'], ['id'], null, null, false, true, null]],
        102 => [[['_route' => 'invoice_edit_header', '_controller' => 'App\\Controller\\InvoiceController::editHeader'], ['id'], null, null, false, true, null]],
        123 => [[['_route' => 'invoice_edit_body', '_controller' => 'App\\Controller\\InvoiceController::editBody'], ['id'], null, null, false, true, null]],
        147 => [[['_route' => 'invoice_delete', '_controller' => 'App\\Controller\\InvoiceController::delete'], ['id'], null, null, false, true, null]],
        163 => [
            [['_route' => 'invoice_show', '_controller' => 'App\\Controller\\InvoiceController::show'], ['id'], null, null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
