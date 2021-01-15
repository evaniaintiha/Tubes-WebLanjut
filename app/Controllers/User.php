<?php namespace App\Controllers;

class User extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        
        $UserModel = new \App\Models\UserModel();
        $users = $UserModel->findAll();

            return view('user/index',[
            'users'=>$users,
        ]);
    }
}