<?php
use Symfony\Component\Routing\RouteCollection;
use Symfony\Component\Routing\Route;
use App\Controller\BlogController;
use App\Controller\ArticleController;

$collection = new RouteCollection();
$collection->add('blog_list', new Route(
    '/blog/{page}',
    array(
        '_controller' => [BlogController::class, 'list'],
        'page' => 1
    ),
    array(
        'page' => '\d+'
    )
));
$collection->add('blog_show', new Route(
    '/blog/{slug}',
    array(
        '_controller' => [BlogController::class, 'show']
    )
));
$collection->add('article_show', new Route(
    '/articles/{_locale}/{year}/{slug}.{_format}',
    array(
        '_controller' => [ArticleController::class, 'show'],
        '_format' => 'html'
    ),
    array(
        '_locale' => 'en|fr',
        '_format' => 'html|rss',
        'year' => '\d+'
    )
));

return $collection;
?>