<?php
namespace App\Controllers;

class pengembalianbio extends BaseController
{

    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        
        $TransaksibioModel = new \App\Models\TransaksiBioModel();
        $transaksibio = $TransaksibioModel->findAll();

            return view('pengembalianbio/index',[
            'transaksibio'=>$transaksibio,
        ]);
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $transaksibioModel = new \App\Models\TransaksiBioModel();
        $transaksibio = $transaksibioModel->find($id);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'pengembalianbioupdate');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $b = new \App\Entities\TransaksiBio();
                $b->id = $id;
                $b->fill($data);
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $transaksibioModel->save($b);

                $segments = ['pengembalianbio','index',$id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('pengembalianbio/update',[
            'transaksibio' => $transaksibio,
            ]);
    }
}