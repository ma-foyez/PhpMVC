<?php

namespace App\Controllers;

use App\Base\Controller;

class WelcomeController extends Controller
{
    public function hello()
    {
    //   require_once VIEWS . '/index.php';
    //    $this->views('index.php');
       return views('index.php');
    }
}