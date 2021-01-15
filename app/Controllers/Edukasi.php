<?php namespace App\Controllers;

class Edukasi extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        
        $edukasiModel = new \App\Models\EdukasiModel();
        $edukasis = $edukasiModel->findAll();

             return view('edukasi/index',[
            'edukasis'=>$edukasis,
        ]);
        
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $edukasiModel = new \App\Models\EdukasiModel();
        $edukasi = $edukasiModel->find($id);

        return view('edukasi/view',[
            'edukasi' => $edukasi,
        ]);
    }

    public function create()
    {
        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data,'edukasi');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $edukasiModel = new \App\Models\EdukasiModel();
                $edukasi = new \App\Entities\Edukasi();

                $edukasi->fill($data);
                $edukasi->gambar = $this->request->getFile('gambar');
                $edukasi->created_by = $this->session->get('id');
                $edukasi->created_date = date("Y-m-d H:i:s");

                $edukasiModel->save($edukasi);

                $id = $edukasiModel->insertID();
                
                $segments = ['edukasi','view',$id];
                return redirect()->to(site_url($segments));
            }
        }
        return view('edukasi/create');
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $edukasiModel = new \App\Models\EdukasiModel();
        $edukasi = $edukasiModel->find($id);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'edukasiupdate');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $b = new \App\Entities\Edukasi();
                $b->id = $id;
                $b->fill($data);

                if($this->request->getFile('gambar')->isValid())
                {
                    $b->gambar = $this->request->getFile('gambar');
                }
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $edukasiModel->save($b);

                $segments = ['Edukasi','view',$id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('edukasi/update',[
            'edukasi' => $edukasi,
            ]);
    }
    
    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelEdukasi = new \App\Models\EdukasiModel();
        $delete = $modelEdukasi->delete($id);

        return redirect()->to(site_url('edukasi/index'));
    }
}