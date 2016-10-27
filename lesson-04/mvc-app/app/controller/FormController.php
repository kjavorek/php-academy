<?php

class FormController
{
    /**
     * Registration page with form
     */
    public function index()
    {
        $view = new View();
        //$view->layout('layout');
        $view->render('index', [
            'message' => 'Controller.'
        ]);
    }

    /**
     * Form submit
     */
    public function submit()
    {
        $view = new View();
        $view->render('form', []);
    }

    /**
     * Thank you page
     */
    public function thankyou()
    {
        echo "Thank you for registering!";
    }

}