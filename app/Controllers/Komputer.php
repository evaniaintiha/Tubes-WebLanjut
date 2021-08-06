<?php

namespace App\Controllers;

class Komputer extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {

        $komputerModel = new \App\Models\KomputerModel();
        $komputers = $komputerModel->findAll();

        if (session()->get('role') == 0) {
            return view('komputer/index', [
                'komputers' => $komputers,
            ]);
        } else {
            return view('komputers/index', [
                'komputers' => $komputers,
            ]);
        }
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $komputerModel = new \App\Models\KomputerModel();
        $komputer = $komputerModel->find($id);

        return view('komputer/view', [
            'komputer' => $komputer,
        ]);
    }

    public function create()
    {
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'komputer');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $komputerModel = new \App\Models\KomputerModel();
                $komputer = new \App\Entities\Komputer();

                $komputer->fill($data);
                if ($this->request->getFile('gambar')->getSize() != 0) {
                    $komputer->gambar = $this->request->getFile('gambar');
                } else {
                    $komputer->gambar = "default.pdf";
                }
                if ($this->request->getFile('gambar2')->getSize() != 0) {
                    $komputer->gambar2 = $this->request->getFile('gambar2');
                } else {
                    $komputer->gambar2 = "default.pdf";
                }
                $komputer->created_by = $this->session->get('id');
                $komputer->created_date = date("Y-m-d H:i:s");

                $komputerModel->save($komputer);

                $id = $komputerModel->insertID();

                $segments = ['komputer', 'view', $id];
                return redirect()->to(site_url($segments));
            } else {
                $this->session->setFlashdata('errors', $errors);
                return view('komputer/create');
            }
        }
        return view('komputer/create');
    }



    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $komputerModel = new \App\Models\KomputerModel();
        $komputer = $komputerModel->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'komputerupdate');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $b = new \App\Entities\Komputer();
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

                $komputerModel->save($b);

                $segments = ['Komputer', 'view', $id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('komputer/update', [
            'komputer' => $komputer,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelKomputer = new \App\Models\KomputerModel();
        $delete = $modelKomputer->delete($id);

        return redirect()->to(site_url('komputer/index'));
    }
}
