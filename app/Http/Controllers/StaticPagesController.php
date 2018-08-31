<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class StaticPagesController extends Controller
{
    public function home()
    {
        return 'zhu';
    }

    public function help()
    {
        return 'help';
    }

    public function about()
    {
        return 'about';
    }
}
