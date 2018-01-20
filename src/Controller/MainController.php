<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class MainController extends Controller
{
    public function show($slug) {
        $url = $this->generateUrl(
            'blog_show',
            array('slug' => 'my-blog-post'),
            UrlGeneratorInterface::ABSOLUTE_URL
        );
    }
}