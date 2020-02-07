<?php

require_once  __DIR__ . '/controllers/PagesController.php';
require_once __DIR__ . '/controllers/FormController.php';

function call($controller, $action) {

    switch($controller) {
        case 'pages':
            $controller = new PagesController();
            break;
        case 'form':
            $controller = new FormController();
            break;
    }
    $controller->{ $action }();
}

$controllers = array('pages' => ['home', 'error'],
    'form' => ['addUser', 'error']);

if (array_key_exists($controller, $controllers)) {
    if (in_array($action, $controllers[$controller])) {
        call($controller, $action);
    } else {
        call('pages', 'error');
    }
} else {
    call('pages', 'error');
}