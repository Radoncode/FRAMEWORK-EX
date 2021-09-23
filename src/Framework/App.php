<?php

namespace Framework;

use GuzzleHttp\Psr7\Response;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

class App
{   
    private $modules = [];

    /**
     * __construct
     * @param  string[] $modules List of the loading modules
     */
    public function __construct(array $modules = [])
    {   
        $router = new Router();
        foreach($modules as $module){
            $this->modules[] = new $module($router);
        }
    }

    public function run(ServerRequestInterface $request): ResponseInterface
    {
        $uri = $request->getUri()->getPath();
        if (!empty($uri) && $uri[-1] === "/") {
            return  (new Response())
                ->withStatus(301)
                ->withHeader('Location', substr($uri, 0, -1));
        }
        if ($uri === '/blog') {
            return new Response(200, [], '<h1>Welcome to my blog</h1>');
        }
        return new Response(404, [], '<h1>Error 404</h1>');
    }
}
