<?php

use CodeIgniter\Router\RouteCollection;

/**
 * @var RouteCollection $routes
 */
$routes->get('/', 'Home::index');
$routes->get('/mdashboard/home', 'mdashboard\ProfileController::home');
$routes->get('/mdashboard/productdetails', 'mdashboard\ProfileController::productdetails');
$routes->get('/mdashboard/allproducts', 'mdashboard\ProfileController::allproducts');
$routes->get('/mdashboard/ordersummary', 'mdashboard\ProfileController::ordersummary');
$routes->get('/mdashboard/checkout', 'mdashboard\ProfileController::checkout');
