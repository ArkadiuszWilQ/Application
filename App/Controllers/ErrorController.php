<?php
namespace Controllers;

class ErrorController extends AppController
{
    public function wrongController()
    {
        echo $this->view->render('Errors/404.html');
    }

    public function wrongAction()
    {
        echo $this->view->render('Errors/404.html');
    }
}