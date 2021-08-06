<?php

namespace App\Controllers;

class Tanah extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {

        $tanahModel = new \App\Models\TanahModel();
        $tanahs = $tanahModel->findAll();

        if (session()->get('role') == 0) {
            return view('tanah/index', [
                'tanahs' => $tanahs,
            ]);
        } else {
            return view('tanahs/index', [
                'tanahs' => $tanahs,
            ]);
        }
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $tanahModel = new \App\Models\TanahModel();
        $tanah = $tanahModel->find($id);

        return view('tanah/view', [
            'tanah' => $tanah,
        ]);
    }

    public function create()
    {
        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'tanah');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $tanahModel = new \App\Models\TanahModel();
                $tanah = new \App\Entities\Tanah();

                $tanah->fill($data);
                if ($this->request->getFile('gambar')->getSize() != 0) {
                    $tanah->gambar = $this->request->getFile('gambar');
                } else {
                    $tanah->gambar = "default.pdf";
                }
                if ($this->request->getFile('gambar2')->getSize() != 0) {
                    $tanah->gambar2 = $this->request->getFile('gambar2');
                } else {
                    $tanah->gambar2 = "default.pdf";
                }
                $tanah->created_by = $this->session->get('id');
                $tanah->created_date = date("Y-m-d H:i:s");

                $tanahModel->save($tanah);

                $id = $tanahModel->insertID();

                $segments = ['tanah', 'view', $id];
                return redirect()->to(site_url($segments));
            } else {
                $this->session->setFlashdata('errors', $errors);
                return view('tanah/create');
            }
        }
        return view('tanah/create');
    }



    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $tanahModel = new \App\Models\TanahModel();
        $tanah = $tanahModel->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'tanahupdate');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $b = new \App\Entities\Tanah();
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

                $tanahModel->save($b);

                $segments = ['Tanah', 'view', $id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('tanah/update', [
            'tanah' => $tanah,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelTanah = new \App\Models\TanahModel();
        $delete = $modelTanah->delete($id);

        return redirect()->to(site_url('tanah/index'));
    }
}
