<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        echo '<h1>HALLO AWI</h1>';
        return view('welcome_message');
    }


}
