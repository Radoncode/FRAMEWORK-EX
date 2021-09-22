<?php

namespace Framework\Router;

/**
 * Class Route
 * Represent a matched route
 */
class Route {
        
    /**
     * name
     *
     * @var mixed
     */
    private $name;    
    /**
     * callback
     *
     * @var mixed
     */
    private $callback;    
    /**
     * parameters
     *
     * @var mixed
     */
    private $parameters;

    public function __construct(string $name, callable $callback, array $parameters)
    {
        
        $this->name = $name;
        $this->callback = $callback;
        $this->paramters = $parameters;
    }

        
    /**
     * @return string
     */
    public function getName(): string 
    {

    }
    
        
    /**
     *
     * @return callable
     */
    public function getCallback(): callable 
    {

    }
    
        
    /**
     * Retrieve the URL Paramaters
     *
     * @return string[]
     */
    public function getParameters(): array 
    {

    }
}