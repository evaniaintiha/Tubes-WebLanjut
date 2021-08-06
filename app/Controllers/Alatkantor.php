<?php

namespace App\Controllers;

class Alatkantor extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {

        $alatkantorModel = new \App\Models\AlatkantorModel();
        $alatkantors = $alatkantorModel->findAll();

        if (session()->get('role') == 0) {
            return view('alatkantor/index', [
                'alatkantors' => $alatkantors,
            ]);
        } else {
            return view('alatkantors/index', [
                'alatkantors' => $alatkantors,
            ]);
        }
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $alatkantorModel = new \App\Models\AlatkantorModel();
        $alatkantor = $alatkantorModel->find($id);

        return view('alatkantor/view', [
            'alatkantor' => $alatkantor,
        ]);
    }

    public function create()
    {
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'alatkantor');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $alatkantorModel = new \App\Models\AlatkantorModel();
                $alatkantor = new \App\Entities\Alatkantor();

                $alatkantor->fill($data);
                if ($this->request->getFile('gambar')->getSize() != 0) {
                    $alatkantor->gambar = $this->request->getFile('gambar');
                } else {
                    $alatkantor->gambar = "default.pdf";
                }
                if ($this->request->getFile('gambar2')->getSize() != 0) {
                    $alatkantor->gambar2 = $this->request->getFile('gambar2');
                } else {
                    $alatkantor->gambar2 = "default.pdf";
                }
                $alatkantor->created_by = $this->session->get('id');
                $alatkantor->created_date = date("Y-m-d H:i:s");

                $alatkantorModel->save($alatkantor);

                $id = $alatkantorModel->insertID();

                $segments = ['alatkantor', 'view', $id];
                return redirect()->to(site_url($segments));
            } else {
                $this->session->setFlashdata('errors', $errors);
                return view('alatkantor/create');
            }
        }
        return view('alatkantor/create');
    }



    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $alatkantorModel = new \App\Models\AlatkantorModel();
        $alatkantor = $alatkantorModel->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'alatkantorupdate');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $b = new \App\Entities\Alatkantor();
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

                $alatkantorModel->save($b);

                $segments = ['Alatkantor', 'view', $id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('alatkantor/update', [
            'alatkantor' => $alatkantor,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelAlatkantor = new \App\Models\AlatkantorModel();
        $delete = $modelAlatkantor->delete($id);

        return redirect()->to(site_url('alatkantor/index'));
    }
}
