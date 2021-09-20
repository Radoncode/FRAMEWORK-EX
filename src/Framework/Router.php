<?php

namespace Framework;

use Framework\Router\Route;
use Psr\Http\Message\ServerRequestInterface;

/**
 * Register and match routes
 */
class Router {
    
    /**
     * get
     *
     * @param  string $path
     * @param  callable $callable
     * @param  string $name
     */
    public function get(string $path, callable $callable, string $name)
    {

    }
    
    /**
     * @param  ServerRequestInterface $request
     * @return Route|null
     */
    public function match(ServerRequestInterface $request): ?Route
    {
        
    }
}