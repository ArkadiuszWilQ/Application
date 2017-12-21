<?php
namespace Controllers;

use Classes\Core\Request;

abstract class AppController
{
    /** @var  \Twig_Environment */
    protected $view;

    /** @var  Request */
    protected $request;

    public function __construct($view)
    {
        $this->view = $view;
        $this->request = new Request();

        $this->initialize();
    }

    public function initialize()
    {

    }
}