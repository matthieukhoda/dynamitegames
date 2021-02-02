<?php

namespace App\Controller;

use Symfony\Component\HttpFoundation\Request;

class DefaultController
{

    public function index()
    {

        var_dump("ok c'est bon");
        die();
    }


    public function test()
    {

        $request = Request::createFromGlobals();
        $age = $request->query->get('age', 0);
        dd("vous avez $age ans");
    }
}