<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

$date = new \DateTime("now" , new \DateTimeZone("Asia/Dubai"));
$start =  new \DateTime("2023-09-08 08:08:08" , new \DateTimeZone("Asia/Dubai"));

/*
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
if($date >= $start)
$routes->setDefaultController('Home');
else
$routes->setDefaultController('Under_maintenance');

$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(false);

// The Auto Routing (Legacy) is very dangerous. It is easy to create vulnerable apps
// where controller filters or CSRF protection are bypassed.
// If you don't want to define all routes, please use the Auto Routing (Improved).
// Set `$autoRoutesImproved` to true in `app/Config/Feature.php` and set the following to true.
// $routes->setAutoRoute(false);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.


if($date >= $start):
$routes->get('/', 'Home::index');
$routes->add('/contact-us', 'Home::contact_us');
$routes->add('/about-us', 'Home::who_we_are');
$routes->add('/programs', 'Home::programs');
$routes->add('/gallery/(:any)', 'Home::gallery/$1');
$routes->add('/gallery', 'Home::gallery');

$routes->add('/dota-form', 'User::form_type');
$routes->add('/dota-register', 'User::form_registration');
$routes->add('/dota-register/(:any)', 'User::form_registration/$1');
$routes->add('/user/register', 'User::register');
$routes->add('/user/cr', 'User::cr');
$routes->add('/user/cr/(:any)', 'User::cr/$1');
$routes->add('/dota-form/junior', 'User::junior_category');
$routes->add('/dota-form/senior', 'User::senior_category');
$routes->add('/dota-form/senior/play', 'User::senior_play');
$routes->add('/rules', 'Home::rule_and_regulations');


$routes->add('/test', 'User::test');

else:
$routes->add('(:any)', 'Under_maintenance::index');
endif;

// $routes->add('/contact-request', 'User::contact_request');



/*
 * --------------------------------------------------------------------
 * Additional Routing
 * --------------------------------------------------------------------
 *
 * There will often be times that you need additional routing and you
 * need it to be able to override any defaults in this file. Environment
 * based routes is one such time. require() additional route files here
 * to make that happen.
 *
 * You will have access to the $routes object within that file without
 * needing to reload it.
 */
if (is_file(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
    require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
