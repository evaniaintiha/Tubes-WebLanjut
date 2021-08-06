<?php

namespace App\Controllers;

class Alatstudio extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {

        $alatstudioModel = new \App\Models\AlatstudioModel();
        $alatstudios = $alatstudioModel->findAll();

        if (session()->get('role') == 0) {
            return view('alatstudio/index', [
                'alatstudios' => $alatstudios,
            ]);
        } else {
            return view('alatstudios/index', [
                'alatstudios' => $alatstudios,
            ]);
        }
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $alatstudioModel = new \App\Models\AlatstudioModel();
        $alatstudio = $alatstudioModel->find($id);

        return view('alatstudio/view', [
            'alatstudio' => $alatstudio,
        ]);
    }

    public function create()
    {
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'alatstudio');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $alatstudioModel = new \App\Models\AlatstudioModel();
                $alatstudio = new \App\Entities\Alatstudio();

                $alatstudio->fill($data);
                if ($this->request->getFile('gambar')->getSize() != 0) {
                    $alatstudio->gambar = $this->request->getFile('gambar');
                } else {
                    $alatstudio->gambar = "default.pdf";
                }
                if ($this->request->getFile('gambar2')->getSize() != 0) {
                    $alatstudio->gambar2 = $this->request->getFile('gambar2');
                } else {
                    $alatstudio->gambar2 = "default.pdf";
                }
                $alatstudio->created_by = $this->session->get('id');
                $alatstudio->created_date = date("Y-m-d H:i:s");

                $alatstudioModel->save($alatstudio);

                $id = $alatstudioModel->insertID();

                $segments = ['alatstudio', 'view', $id];
                return redirect()->to(site_url($segments));
            } else {
                $this->session->setFlashdata('errors', $errors);
                return view('alatstudio/create');
            }
        }
        return view('alatstudio/create');
    }



    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $alatstudioModel = new \App\Models\AlatstudioModel();
        $alatstudio = $alatstudioModel->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'alatstudioupdate');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $b = new \App\Entities\Alatstudio();
                $b->id = $id;
                $b->fill($data);

                if ($this->request->getFile('gambar')->isValid()) {
                    $b->gambar = $this->request->getFile('gambar');
                }
                if ($this->request->getFile('gambar2')->isValid()) {
                    $b->gambar2 = $this->request->getFile('gambar2');
                }
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $alatstudioModel->save($b);

                $segments = ['Alatstudio', 'view', $id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('alatstudio/update', [
            'alatstudio' => $alatstudio,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelAlatstudio = new \App\Models\AlatstudioModel();
        $delete = $modelAlatstudio->delete($id);

        return redirect()->to(site_url('alatstudio/index'));
    }
}
