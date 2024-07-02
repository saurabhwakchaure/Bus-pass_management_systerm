<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class AboutController extends BaseController
{
    public function About()
    {
        return view('about');
    }

    public function aboutdepo()
    {
        return view('aboutdepo');
    }
}
