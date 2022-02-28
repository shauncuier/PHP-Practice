<?php

namespace app\core;

class Router
{
    public Request $request;
    protected array $routs = [];
    public function get($path, $callback)
    {
        $this->routs['get'][$path] = $callback;
    }

    public function resolve()
    {
        
    }
}
