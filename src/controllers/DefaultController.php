<?php

require_once 'AppController.php';

class gitDefaultController extends AppController{

    public function index()
    {
        $this->render('login');
    }

    public function main()
    {
        $this->render('main');
    }

    public function register()
    {
        $this->render('register');
    }
}