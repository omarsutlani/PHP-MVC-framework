<?php

namespace core;
abstract class Controller{
    protected $rout_params = [];

    public function __construct($route_params)
    {
        $this->route_params = $route_params;
    }
}