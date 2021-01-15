<?php
namespace App\Controllers;

class Pengembalianedu extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        
        $TransaksieduModel = new \App\Models\TransaksiEduModel();
        $transaksiedu = $TransaksieduModel->findAll();

            return view('pengembalianedu/index',[
            'transaksiedu'=>$transaksiedu,
        ]);
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $transaksieduModel = new \App\Models\TransaksiEduModel();
        $transaksiedu = $transaksieduModel->find($id);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'pengembalianeduupdate');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $b = new \App\Entities\TransaksiEdu();
                $b->id = $id;
                $b->fill($data);
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $transaksieduModel->save($b);

                $segments = ['pengembalianedu','index',$id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('pengembalianedu/update',[
            'transaksiedu' => $transaksiedu,
            ]);
    }
}