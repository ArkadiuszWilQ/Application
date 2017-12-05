<?php
namespace Controllers;

abstract class AppController
{
    /** @var  \Twig_Environment */
    protected $view;

    public function __construct($view)
    {
        $this->view = $view;

        $this->initialize();
    }

    public function initialize()
    {

    }
}