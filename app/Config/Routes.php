<?php

namespace Config;

use CodeIgniter\Router\RouteCollection;

$routes = Services::routes();

$routes->setDefaultNamespace('App\Controllers');
$routes->setDefaultController('Dashboard');
$routes->setDefaultMethod('index');
$routes->setTranslateURIDashes(false);
$routes->set404Override();

// Add these routes
$routes->get('/', 'Dashboard::index');
$routes->get('articles', 'Article::index');
$routes->get('articles/create', 'Article::create');
$routes->post('articles/store', 'Article::store');
$routes->get('articles/edit/(:num)', 'Article::edit/$1');
$routes->post('articles/update/(:num)', 'Article::update/$1');
$routes->get('articles/delete/(:num)', 'Article::delete/$1');
$routes->get('feedback', 'Feedback::index');
$routes->get('feedback/create', 'Feedback::create');
$routes->post('feedback/store', 'Feedback::store');

$routes->setAutoRoute(false);