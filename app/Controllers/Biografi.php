<?php namespace App\Controllers;

class Biografi extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        
        $biografiModel = new \App\Models\BiografiModel();
        $biografis = $biografiModel->findAll();

            return view('biografi/index',[
            'biografis'=>$biografis,
        ]);
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $biografiModel = new \App\Models\BiografiModel();
        $biografi = $biografiModel->find($id);

        return view('biografi/view',[
            'biografi' => $biografi,
        ]);
    }

    public function create()
    {
        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data,'biografi');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $biografiModel = new \App\Models\BiografiModel();
                $biografi = new \App\Entities\Biografi();

                $biografi->fill($data);
                $biografi->gambar = $this->request->getFile('gambar');
                $biografi->created_by = $this->session->get('id');
                $biografi->created_date = date("Y-m-d H:i:s");

                $biografiModel->save($biografi);

                $id = $biografiModel->insertID();
                
                $segments = ['biografi','view',$id];
                return redirect()->to(site_url($segments));
            }
        }
        return view('biografi/create');
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $biografiModel = new \App\Models\BiografiModel();
        $biografi = $biografiModel->find($id);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'biografiupdate');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $b = new \App\Entities\Biografi();
                $b->id = $id;
                $b->fill($data);

                if($this->request->getFile('gambar')->isValid())
                {
                    $b->gambar = $this->request->getFile('gambar');
                }
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $biografiModel->save($b);

                $segments = ['Biografi','view',$id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('biografi/update',[
            'biografi' => $biografi,
            ]);
    }
    
    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelBiografi = new \App\Models\BiografiModel();
        $delete = $modelBiografi->delete($id);

        return redirect()->to(site_url('biografi/index'));
    }
}