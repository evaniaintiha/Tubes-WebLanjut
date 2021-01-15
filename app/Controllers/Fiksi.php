<?php namespace App\Controllers;

class Fiksi extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        
        $fiksiModel = new \App\Models\FiksiModel();
        $fiksis = $fiksiModel->findAll();

             return view('fiksi/index',[
            'fiksis'=>$fiksis,
        ]);
         
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $fiksiModel = new \App\Models\FiksiModel();
        $fiksi = $fiksiModel->find($id);

        return view('fiksi/view',[
            'fiksi' => $fiksi,
        ]);
    }

    public function create()
    {
        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data,'fiksi');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $fiksiModel = new \App\Models\FiksiModel();
                $fiksi = new \App\Entities\Fiksi();

                $fiksi->fill($data);
                $fiksi->gambar = $this->request->getFile('gambar');
                $fiksi->created_by = $this->session->get('id');
                $fiksi->created_date = date("Y-m-d H:i:s");

                $fiksiModel->save($fiksi);

                $id = $fiksiModel->insertID();
                
                $segments = ['fiksi','view',$id];
                return redirect()->to(site_url($segments));
            }
        }
        return view('fiksi/create');
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $fiksiModel = new \App\Models\FiksiModel();
        $fiksi = $fiksiModel->find($id);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'fiksiupdate');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $b = new \App\Entities\Fiksi();
                $b->id = $id;
                $b->fill($data);

                if($this->request->getFile('gambar')->isValid())
                {
                    $b->gambar = $this->request->getFile('gambar');
                }
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $fiksiModel->save($b);

                $segments = ['Fiksi','view',$id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('fiksi/update',[
            'fiksi' => $fiksi,
            ]);
    }
    
    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelFiksi = new \App\Models\FiksiModel();
        $delete = $modelFiksi->delete($id);

        return redirect()->to(site_url('fiksi/index'));
    }
}