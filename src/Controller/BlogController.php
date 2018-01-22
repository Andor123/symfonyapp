<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\HttpFoundation\Response;

class BlogController extends Controller
{
    /**
     * @Route("/blog/{page}", name="blog_list", requirements={"page"="\d+"})
     */
    public function list($page = 1) {
        return $this->render('blog/blog.html.twig', array(
            'page' => $page
        ));
    }

    /**
     * @Route("/blog/{slug}", name="blog_show")
     */
    public function show($slug) {
        $this->generateUrl('blog_show', array('slug' => 'slug-value'));
        return new Response(
            '<html><body>' . $slug . '</body></html>'
        );
    }
}