<?php
namespace Classes;

use Classes\Routing\Router;
use Controllers\ErrorController;

/** Klasa obsługująca aplikację */
class Application
{
    /** @var  \Twig_Environment */
    private $twig;

    public function run()
    {
        $this->prepareTwig();

        $router = new Router($this->twig);
        $controller = $router->createController();
        $action = $router->getAction();

        if(is_null($controller)) {
            $errorController = new ErrorController($this->twig);
            $errorController->wrongController();

            return;
        }

        if(method_exists($controller, $action) == false) {
            $errorController = new ErrorController($this->twig);
            $errorController->wrongAction();

            return;
        }

        $controller->$action();
    }

    private function prepareTwig()
    {
        $loader = new \Twig_Loader_Filesystem(VIEWS_PATH);

        $this->twig =  new \Twig_Environment($loader, array(
//            'cache' => VIEWS_CACHE,
        ));
    }
}