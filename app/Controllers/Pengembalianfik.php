<?php
namespace App\Controllers;

class Pengembalianfik extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        
        $TransaksifikModel = new \App\Models\TransaksiFikModel();
        $transaksifik = $TransaksifikModel->findAll();

            return view('pengembalianfik/index',[
            'transaksifik'=>$transaksifik,
        ]);
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $transaksifikModel = new \App\Models\TransaksiFikModel();
        $transaksifik = $transaksifikModel->find($id);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'pengembalianfikupdate');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $b = new \App\Entities\TransaksiFik();
                $b->id = $id;
                $b->fill($data);
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $transaksifikModel->save($b);

                $segments = ['pengembalianfik','index',$id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('pengembalianfik/update',[
            'transaksifik' => $transaksifik,
            ]);
    }
}