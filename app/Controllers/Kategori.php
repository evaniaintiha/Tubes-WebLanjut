<?php

namespace App\Controllers;

class Kategori extends BaseController
{
    public function __construct()
    {
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {

        $kategoriModel = new \App\Models\KategoriModel();
        $keyword = $this->request->getVar('key');
        if ($keyword) {
            $kategoris = $kategoriModel->like('sub', $keyword)->orLike('kategori', $keyword)->findAll();
        } else {
            $kategoris = $kategoriModel->findAll();
        }

        return view('kategori/index', [
            'kategoris' => $kategoris,
        ]);
    }
    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $kategoriModel = new \App\Models\KategoriModel();
        $kategori = $kategoriModel->find($id);

        return view('kategori/view', [
            'kategori' => $kategori,
        ]);
    }

    public function create()
    {
        $kategoriModel = new \App\Models\KategoriModel();
        $kategoris = $kategoriModel->findAll();

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'kategori');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $kategoriModel = new \App\Models\KategoriModel();
                $kategori = new \App\Entities\Kategori();

                $kategori->fill($data);
                $kategori->gambar = $this->request->getFile('gambar');
                $kategori->created_by = $this->session->get('id');
                $kategori->created_date = date("Y-m-d H:i:s");

                $kategoriModel->save($kategori);

                $id = $kategoriModel->insertID();
                $segments = ['kategori', 'view', $id];
                
                return redirect()->to(site_url('kategori/index'));
            }
        }
        return view('kategori/create');
    }



    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $kategoriModel = new \App\Models\KategoriModel();
        $kategori = $kategoriModel->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'kategoriupdate');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $b = new \App\Entities\Kategori();
                $b->id = $id;
                $b->fill($data);

                if ($this->request->getFile('gambar')->isValid()) {
                    $b->gambar = $this->request->getFile('gambar');
                }
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $kategoriModel->save($b);

                $segments = ['Kategori', 'view', $id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('kategori/update', [
            'kategori' => $kategori,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelKategori = new \App\Models\KategoriModel();
        $delete = $modelKategori->delete($id);

        return redirect()->to(site_url('kategori/index'));
    }
}
