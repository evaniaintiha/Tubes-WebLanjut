<?php namespace App\Controllers;

class Biografiu extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index(){
        $biografi =new \App\Models\BiografiModel();
        $model = $biografi->findAll();
        return view('biografiu/index',[
            'model' => $model,
        ]);
    }

    public function pinjam()
    {
        $id = $this->request->uri->getSegment(3);

        $modelBiografi = new \App\Models\BiografiModel();
        $model = $modelBiografi->find($id);

        if($this->request->getPost())
		{
		    $data = $this->request->getPost();
			$this->validation->run($data, 'transaksibio');
			$errors = $this->validation->getErrors();

			if(!$errors){
				$transaksibioModel = new \App\Models\TransaksiBioModel();
                $transaksibio = new \App\Entities\TransaksiBio();
                
				$biografiModel = new \App\Models\BiografiModel();
				$id_biografi = $this->request->getPost('id_biografi');
				$jumlah_peminjaman = $this->request->getPost('jumlah');

				$biografi = $biografiModel->find($id_biografi);
				$entityBiografi = new \App\Entities\Biografi();
				$entityBiografi->id = $id_biografi;
				
				$entityBiografi->stok = $biografi->stok-$jumlah_peminjaman;
				$biografiModel->save($entityBiografi);

				$transaksibio->fill($data);
				$transaksibio->status = 0;
				$transaksibio->created_by = $this->session->get('id');
				$transaksibio->created_date = date("Y-m-d H:i:s");

				$transaksibioModel->save($transaksibio);

				$id = $transaksibioModel->insertID();

				$segment = ['transaksibio','view',$id];

				return redirect()->to(site_url($segment));
                }
        }
        return view('biografiu/pinjam',[
            'model'=>$model,

        ]);
    }
}