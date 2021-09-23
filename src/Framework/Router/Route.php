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
    private $params;

    public function __construct(string $name, callable $callback, array $params)
    {
        
        $this->name = $name;
        $this->callback = $callback;
        $this->params = $params;
    }

        
    /**
     * @return string
     */
    public function getName(): string 
    {
        return $this->name;
    }
    
        
    /**
     *
     * @return callable
     */
    public function getCallback(): callable 
    {
        return $this->callback;
    }
    
        
    /**
     * Retrieve the URL Paramaters
     *
     * @return string[]
     */
    public function getParams(): array 
    {
        return $this->params;
    }
}