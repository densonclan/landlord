<?php


use Cake\Routing\Router;

Router::defaultRouteClass('Route');

// Home Routes
Router::scope('/', function ($routes) {
    $routes->connect('/', ['controller' => 'Home', 'action' => 'index']);


    $routes->fallbacks('InflectedRoute');
});


// Admin Routes
Router::prefix('admin', function ($routes) {

    // Dashboad
    $routes->connect('/', array('controller' => 'Dashboard', 'action'=>'index'));


    // Users
    $routes->connect('/users', array('controller' => 'Users', 'action' => 'index'));
    $routes->connect('/users/details', array('controller' => 'Users', 'action' => 'details'));
    $routes->connect('/users/add', array('controller' => 'Users', 'action' => 'add'));
    $routes->connect('/users/edit/*', array('controller' => 'Users', 'action' => 'edit'));
    $routes->connect('/users/delete/*', array('controller' => 'Users', 'action' => 'delete'));
    $routes->connect('/login', array('controller' => 'Users', 'action' => 'login'));
    $routes->connect('/logout', array('controller' => 'Users', 'action' => 'logout'));

    // Roles
    $routes->connect('/profile', ['controller' => 'Roles', 'action' => 'index']);
    $routes->connect('/profile/details', ['controller' => 'Roles', 'action' => 'details']);
    $routes->connect('/profile/add', ['controller' => 'Roles', 'action' => 'add']);
    $routes->connect('/profile/edit/*', ['controller' => 'Roles', 'action' => 'edit']);
    $routes->connect('/profile/delete/*', ['controller' => 'Roles', 'action' => 'delete']);


    $routes->fallbacks('InflectedRoute');
});







