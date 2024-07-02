<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ServerController extends BaseController
{
    public function dashboardserver()
    {
        return view('dashboardserver');
    }

    public function fareform()
    {
        return view('fareform');
    }
}
