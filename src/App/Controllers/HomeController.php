<?php

declare(strict_types=1);

namespace App\Controllers;

use Framework\Controller;
use Framework\Response;

class HomeController extends Controller
{
    public function index(): Response
    {
        return 'test';
    }
}
 