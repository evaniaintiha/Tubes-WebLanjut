<?php namespace App\Controllers;

class Fiksiu extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index(){
        $fiksi =new \App\Models\FiksiModel();
        $model = $fiksi->findAll();
        return view('fiksiu/index',[
            'model' => $model,
        ]);
    }

    public function pinjam()
    {
        $id = $this->request->uri->getSegment(3);

        $modelFiksi = new \App\Models\FiksiModel();
        $model = $modelFiksi->find($id);

        if($this->request->getPost())
		{
		    $data = $this->request->getPost();
			$this->validation->run($data, 'transaksifik');
			$errors = $this->validation->getErrors();

			if(!$errors){
				$transaksifikModel = new \App\Models\TransaksiFikModel();
                $transaksifik = new \App\Entities\TransaksiFik();
                
				$fiksiModel = new \App\Models\FiksiModel();
				$id_fiksi = $this->request->getPost('id_fiksi');
				$jumlah_peminjaman = $this->request->getPost('jumlah');

				$fiksi = $fiksiModel->find($id_fiksi);
				$entityFiksi = new \App\Entities\Fiksi();
				$entityFiksi->id = $id_fiksi;
				
				$entityFiksi->stok = $fiksi->stok-$jumlah_peminjaman;
				$fiksiModel->save($entityFiksi);

				$transaksifik->fill($data);
				$transaksifik->status = 0;
				$transaksifik->created_by = $this->session->get('id');
				$transaksifik->created_date = date("Y-m-d H:i:s");

				$transaksifikModel->save($transaksifik);

				$id = $transaksifikModel->insertID();

				$segment = ['transaksifik','view',$id];

				return redirect()->to(site_url($segment));
                }
        }
        return view('fiksiu/pinjam',[
            'model'=>$model,

        ]);
    }
}