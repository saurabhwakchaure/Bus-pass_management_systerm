<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class ResumeController extends BaseController
{
    public function resume()
    {
        return view('resume');
    }
}
