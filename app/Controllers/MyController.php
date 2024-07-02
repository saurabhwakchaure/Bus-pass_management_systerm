<?php

namespace App\Controllers;

use App\Controllers\BaseController;
use CodeIgniter\HTTP\ResponseInterface;

class MyController extends BaseController
{
    public function one()
    {
        return view('one');
    }
    public function home()
    {
        return view('home');
    }
    public function project()
    {
        return view('project');
    }
    public function courses()
    {
        return view('service');
    }
    public function team()
    {
        return view('team');
    }
    public function team1()
    {
        return view('team1');
    }
    public function contact()
    {
        return view('contact');
    }
    public function myui()
    {
        return view('myui');
    }
    public function booking()
    {
        return view('booking');
    }
    public function getfare()
    {
        return view('getfare');
    }
    public function enterbus()
    {
        return view('enterbus');
    }
    public function insertbus()
    {
        $data=[
            'from'=>$this->request->getVar('from'),
            'to'=>$this->request->getVar('to'),
            'price'=>$this->request->getVar('price'),
             ];

           //dd($data);

             $model=new FareModel();
             $model->insert($data);

             echo '<script>alert("vegetable data insert successfully")</script>';  
             return $this->response->redirect(site_url('enterbus'));
    }
    public function tabledesign()
    {
        return view('tabledesign');
    }
}
