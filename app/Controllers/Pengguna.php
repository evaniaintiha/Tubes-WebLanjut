<?php

namespace App\Controllers;

class Pengguna extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {

        $penggunaModel = new \App\Models\PenggunaModel();
        $keyword = $this->request->getVar('key');
        if ($keyword) {
            $penggunas = $penggunaModel->like('sub', $keyword)->orLike('pengguna', $keyword)->findAll();
        } else {
            $penggunas = $penggunaModel->findAll();
        }

        return view('pengguna/index', [
            'penggunas' => $penggunas,
        ]);
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $penggunaModel = new \App\Models\PenggunaModel();
        $pengguna = $penggunaModel->find($id);

        return view('pengguna/view', [
            'pengguna' => $pengguna,
        ]);
    }

    public function create()
    {
        $penggunaModel = new \App\Models\PenggunaModel();
        $penggunas = $penggunaModel->findAll();

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'pengguna');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $penggunaModel = new \App\Models\PenggunaModel();
                $pengguna = new \App\Entities\Pengguna();

                $pengguna->fill($data);
                $pengguna->gambar = $this->request->getFile('gambar');
                $pengguna->created_by = $this->session->get('id');
                $pengguna->created_date = date("Y-m-d H:i:s");

                $penggunaModel->save($pengguna);

                $id = $penggunaModel->insertID();
                $segments = ['pengguna', 'view', $id];
                
                return redirect()->to(site_url('pengguna/index'));
            }
        }
        return view('pengguna/create');
    }



    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $penggunaModel = new \App\Models\PenggunaModel();
        $pengguna = $penggunaModel->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'penggunaupdate');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $b = new \App\Entities\Pengguna();
                $b->id = $id;
                $b->fill($data);

                if ($this->request->getFile('gambar')->isValid()) {
                    $b->gambar = $this->request->getFile('gambar');
                }
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $penggunaModel->save($b);

                $segments = ['Pengguna', 'view', $id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('pengguna/update', [
            'pengguna' => $pengguna,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelPengguna = new \App\Models\PenggunaModel();
        $delete = $modelPengguna->delete($id);

        return redirect()->to(site_url('pengguna/index'));
    }
}
