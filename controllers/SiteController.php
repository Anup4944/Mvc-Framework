<?php

namespace app\controllers;


use app\core\Application;

class SiteController
{
    public function home()
    {
        $params = [
            'name'=> "Code"
        ];
        return Application::$app->router->renderView('home', $params);
    }

    public function contact()
    {
        return Application::$app->router->renderView('contact');
    }

    public function handleContact()
    {
        return 'Handle on Submit';
    }
}