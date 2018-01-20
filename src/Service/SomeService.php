<?php

namespace App\Service;

use Symfony\Component\Routing\Generator\UrlGeneratorInterface;

class SomeService
{
    private $router;

    public function __construct(UrlGeneratorInterface $router)
    {
        $this->router = $router;
    }

    public function someMethod() {
        $url = $this->router->generate(
            'blog_show',
            array('slug' => 'my-blog-post')
        );
        $url2 = $this->router->generate('blog', array(
            'page' => 2,
            'category' => 'Symfony'
        ));
    }
}