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
        '/admin' => [[['_route' => 'admin', '_controller' => 'App\\Controller\\AdminController::index'], null, null, null, false, false, null]],
        '/admin/candidate' => [[['_route' => 'candidate_index', '_controller' => 'App\\Controller\\CandidateController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/candidate/new' => [[['_route' => 'candidate_new', '_controller' => 'App\\Controller\\CandidateController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/' => [[['_route' => 'homepage', '_controller' => 'App\\Controller\\FrontController::index'], null, null, null, false, false, null]],
        '/offers' => [[['_route' => 'offers', '_controller' => 'App\\Controller\\FrontController::offers'], null, ['GET' => 0], null, false, false, null]],
        '/admin/job' => [[['_route' => 'job_index', '_controller' => 'App\\Controller\\JobController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/job/new' => [[['_route' => 'job_new', '_controller' => 'App\\Controller\\JobController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
        '/admin/offer' => [[['_route' => 'offer_index', '_controller' => 'App\\Controller\\OfferController::index'], null, ['GET' => 0], null, true, false, null]],
        '/admin/offer/new' => [[['_route' => 'offer_new', '_controller' => 'App\\Controller\\OfferController::new'], null, ['GET' => 0, 'POST' => 1], null, false, false, null]],
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
                    .'|candidate/([^/]++)(?'
                        .'|(*:200)'
                        .'|/edit(*:213)'
                        .'|(*:221)'
                    .')'
                    .'|job/([^/]++)(?'
                        .'|(*:245)'
                        .'|/edit(*:258)'
                        .'|(*:266)'
                    .')'
                    .'|offer/([^/]++)(?'
                        .'|(*:292)'
                        .'|/edit(*:305)'
                        .'|(*:313)'
                    .')'
                .')'
                .'|/offers/(?'
                    .'|department\\-([^/]++)(*:354)'
                    .'|job\\-([^/]++)(*:375)'
                    .'|([^/]++)(*:391)'
                .')'
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
        200 => [[['_route' => 'candidate_show', '_controller' => 'App\\Controller\\CandidateController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        213 => [[['_route' => 'candidate_edit', '_controller' => 'App\\Controller\\CandidateController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        221 => [[['_route' => 'candidate_delete', '_controller' => 'App\\Controller\\CandidateController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        245 => [[['_route' => 'job_show', '_controller' => 'App\\Controller\\JobController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        258 => [[['_route' => 'job_edit', '_controller' => 'App\\Controller\\JobController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        266 => [[['_route' => 'job_delete', '_controller' => 'App\\Controller\\JobController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        292 => [[['_route' => 'offer_show', '_controller' => 'App\\Controller\\OfferController::show'], ['id'], ['GET' => 0], null, false, true, null]],
        305 => [[['_route' => 'offer_edit', '_controller' => 'App\\Controller\\OfferController::edit'], ['id'], ['GET' => 0, 'POST' => 1], null, false, false, null]],
        313 => [[['_route' => 'offer_delete', '_controller' => 'App\\Controller\\OfferController::delete'], ['id'], ['DELETE' => 0], null, false, true, null]],
        354 => [[['_route' => 'offersDep', '_controller' => 'App\\Controller\\FrontController::offersDep'], ['code'], ['GET' => 0], null, false, true, null]],
        375 => [[['_route' => 'offersPerJob', '_controller' => 'App\\Controller\\FrontController::offersPerJob'], ['id'], ['GET' => 0], null, false, true, null]],
        391 => [
            [['_route' => 'offerDetails', '_controller' => 'App\\Controller\\FrontController::offerDetails'], ['id'], ['GET' => 0], null, false, true, null],
            [null, null, null, null, false, false, 0],
        ],
    ],
    null, // $checkCondition
];
