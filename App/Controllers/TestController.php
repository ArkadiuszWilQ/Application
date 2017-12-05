<?php
namespace Controllers;

class TestController extends AppController
{
    public function test()
    {
        echo $this->view->render('Test/test.html');
    }

    public function test2()
    {
        echo $this->view->render('Test/test2.html');
    }
}