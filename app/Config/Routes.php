<?php

namespace Config;

// Create a new instance of our RouteCollection class.
$routes = Services::routes();

// Load the system's routing file first, so that the app and ENVIRONMENT
// can override as needed.
if (file_exists(SYSTEMPATH . 'Config/Routes.php')) {
	require SYSTEMPATH . 'Config/Routes.php';
}

/**
 * --------------------------------------------------------------------
 * Router Setup
 * --------------------------------------------------------------------
 */
$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Home');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();
$routes->setAutoRoute(true);

/*
 * --------------------------------------------------------------------
 * Route Definitions
 * --------------------------------------------------------------------
 */

// We get a performance increase by specifying the default
// route since we don't have to scan directories.

// $routes->get('/', 'Page\Home::index');
// $routes->get('/articles/list', 'Article\Home::index');
// $routes->get('/articles/empty', 'Article\Home::empty');
// $routes->get('/articles/show/(:num)', 'Article\Home::show/$1');
// $routes->get('/articles/contact', 'Article\Home::contact');

$routes->get('/', 'Page\Home::index');
$routes->get('/about', 'Page\Home::about');
$routes->get('/contact', 'Page\Home::contact');
$routes->get('/faqs', 'Page\Home::faqs');
$routes->get('/save_contact', 'Page\Home::save_contact');
$routes->get('/contact_thanks', 'Page\Home::contact_thanks');

$routes->get('/news', 'News\News::index');
$routes->get('/news/(:any)', 'News\News::viewNews/$1');

$routes->group('admin', function ($routes) {
	$routes->get('news', 'NewsAdmin\NewsAdmin::index');
	$routes->delete('news/(:num)/preview', 'NewsAdmin\NewsAdmin::delete/$1');
	$routes->get('news/(:any)/preview', 'NewsAdmin\NewsAdmin::preview/$1');
	$routes->add('news/new', 'NewsAdmin\NewsAdmin::create');
	$routes->add('news/save', 'NewsAdmin\NewsAdmin::save');
	$routes->get('news/(:segment)/edit', 'NewsAdmin\NewsAdmin::edit/$1');
	$routes->add('news/(:segment)/update', 'NewsAdmin\NewsAdmin::update/$1');
});

// $routes->get('/article', 'Article::index');
// $routes->get('/article/about', 'Article::about');
// $routes->get('/article/contact', 'Article::contact');


// You can disable this automatic matching, 
// and restrict routes to only those defined by you, by setting the setAutoRoute() option to false
$routes->setAutoRoute('false');

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
if (file_exists(APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php')) {
	require APPPATH . 'Config/' . ENVIRONMENT . '/Routes.php';
}
