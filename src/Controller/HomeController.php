<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Response;

class HomeController extends Controller
{
    public function index() {
        return new Response(
            '<html><body><h1>Welcome to my Symfony project!</h1></body></html>'
        );
    }
}