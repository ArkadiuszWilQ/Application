<?php
namespace Classes\Routing;

class Router
{
    private $data;

    /** @var \Twig_Environment */
    private $preparedTwig;

    public function __construct($preparedTwig)
    {
        $this->preparedTwig = $preparedTwig;
        $this->data = $_GET;
    }

    public function createController()
    {
        $controllerName = explode('/', substr($this->data['_url'], 1) ?? '')[0];

        $class = "\Controllers\\" . ucfirst($controllerName) . 'Controller';

        if(class_exists($class)) {
            return new $class($this->preparedTwig);
        }

        return null;
    }

    public function getAction()
    {
        return explode('/', substr($this->data['_url'], 1) ?? '')[1];
    }
}