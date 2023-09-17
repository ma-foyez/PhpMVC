<?php

use App\Controllers\BlogsController;
use App\Controllers\WelcomeController;
use Pecee\SimpleRouter\SimpleRouter;

SimpleRouter::get('/projects/phpmvc', function(){
    return views('index.php');
});

// SimpleRouter::get('/projects/phpmvc', [WelcomeController::class, 'hello']);

SimpleRouter::get('/projects/phpmvc/blog', [BlogsController::class, 'index']);