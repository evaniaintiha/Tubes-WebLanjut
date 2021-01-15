<?php namespace App\Controllers;

class Edukasiu extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index(){
        $edukasi =new \App\Models\EdukasiModel();
        $model = $edukasi->findAll();
        return view('edukasiu/index',[
            'model' => $model,
        ]);
    }

    public function pinjam()
    {
        $id = $this->request->uri->getSegment(3);

        $modelEdukasi = new \App\Models\EdukasiModel();
        $model = $modelEdukasi->find($id);

        if($this->request->getPost())
		{
		    $data = $this->request->getPost();
			$this->validation->run($data, 'transaksiedu');
			$errors = $this->validation->getErrors();

			if(!$errors){
				$transaksieduModel = new \App\Models\TransaksiEduModel();
                $transaksiedu = new \App\Entities\TransaksiEdu();
                
				$edukasiModel = new \App\Models\EdukasiModel();
				$id_edukasi = $this->request->getPost('id_edukasi');
				$jumlah_peminjaman = $this->request->getPost('jumlah');

				$edukasi = $edukasiModel->find($id_edukasi);
				$entityEdukasi = new \App\Entities\Edukasi();
				$entityEdukasi->id = $id_edukasi;
				
				$entityEdukasi->stok = $edukasi->stok-$jumlah_peminjaman;
				$edukasiModel->save($entityEdukasi);

				$transaksiedu->fill($data);
				$transaksiedu->status = 0;
				$transaksiedu->created_by = $this->session->get('id');
				$transaksiedu->created_date = date("Y-m-d H:i:s");

				$transaksieduModel->save($transaksiedu);

				$id = $transaksieduModel->insertID();

				$segment = ['transaksiedu','view',$id];

				return redirect()->to(site_url($segment));
                }
        }
        return view('edukasiu/pinjam',[
            'model'=>$model,

        ]);
    }
}