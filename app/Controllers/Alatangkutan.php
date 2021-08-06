<?php

namespace App\Controllers;

class Alatangkutan extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {

        $alatangkutanModel = new \App\Models\AlatangkutanModel();
        $alatangkutans = $alatangkutanModel->findAll();

        if (session()->get('role') == 0) {
            return view('alatangkutan/index', [
                'alatangkutans' => $alatangkutans,
            ]);
        } else {
            return view('alatangkutans/index', [
                'alatangkutans' => $alatangkutans,
            ]);
        }
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $alatangkutanModel = new \App\Models\AlatangkutanModel();
        $alatangkutan = $alatangkutanModel->find($id);

        return view('alatangkutan/view', [
            'alatangkutan' => $alatangkutan,
        ]);
    }

    public function create()
    {
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'alatangkutan');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $alatangkutanModel = new \App\Models\AlatangkutanModel();
                $alatangkutan = new \App\Entities\Alatangkutan();

                $alatangkutan->fill($data);
                if ($this->request->getFile('gambar')->getSize() != 0) {
                    $alatangkutan->gambar = $this->request->getFile('gambar');
                } else {
                    $alatangkutan->gambar = "default.pdf";
                }
                if ($this->request->getFile('gambar2')->getSize() != 0) {
                    $alatangkutan->gambar2 = $this->request->getFile('gambar2');
                } else {
                    $alatangkutan->gambar2 = "default.pdf";
                }

                $alatangkutan->created_by = $this->session->get('id');
                $alatangkutan->created_date = date("Y-m-d H:i:s");

                $alatangkutanModel->save($alatangkutan);

                $id = $alatangkutanModel->insertID();

                $segments = ['alatangkutan', 'view', $id];
                return redirect()->to(site_url($segments));
            } else {
                $this->session->setFlashdata('errors', $errors);
                return view('alatangkutan/create');
            }
        }
        return view('alatangkutan/create');
    }

    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $alatangkutanModel = new \App\Models\AlatangkutanModel();
        $alatangkutan = $alatangkutanModel->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'alatangkutanupdate');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $b = new \App\Entities\Alatangkutan();
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
                $alatangkutanModel->save($b);

                $segments = ['Alatangkutan', 'view', $id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('alatangkutan/update', [
            'alatangkutan' => $alatangkutan,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelAlatangkutan = new \App\Models\AlatangkutanModel();
        $delete = $modelAlatangkutan->delete($id);

        return redirect()->to(site_url('alatangkutan/index'));
    }
}
