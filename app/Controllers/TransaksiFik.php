<?php
namespace App\Controllers;

class TransaksiFik extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->validation = \Config\Services::validation();
		$this->session = session();
	}

	 public function vieww()
    {
        $id = $this->request->uri->getSegment(3);
        $TransaksifikModel = new \App\Models\TransaksiFikModel();
        $transaksifik = $TransaksifikModel->find($id);

        return view('peminjamfik/view',[
            'transaksifik' => $transaksifik,
        ]);
    }

	public function index()
    {
        
        $TransaksifikModel = new \App\Models\TransaksiFikModel();
        $transaksifik = $TransaksifikModel->findAll();

            return view('peminjamfik/index',[
            'transaksifik'=>$transaksifik,
        ]);
    }



	public function view()
	{
		$id = $this->request->uri->getSegment(3);

		$transaksifikModel = new \App\Models\TransaksiFikModel();
		$transaksifik = $transaksifikModel->select('*, transaksifik.id AS id_trans')->join('fiksi', 'fiksi.id=transaksifik.id_fiksi')
					->join('user', 'user.id=transaksifik.id_peminjam')
					->where('transaksifik.id', $id)
					->first();

		return view('transaksifik/view',[
			'transaksifik'=>$transaksifik,
		]);
	}


	public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $transaksifikModel = new \App\Models\TransaksiFikModel();
        $transaksifik = $transaksifikModel->find($id);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'transaksifikupdate');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $b = new \App\Entities\TransaksiFik();
                $b->id = $id;
                $b->fill($data);
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $transaksifikModel->save($b);

                $segments = ['transaksifik','vieww',$id];

                return redirect()->to(base_url($segments));
            }
        }
        return view('peminjamfik/update',[
            'transaksifik' => $transaksifik,
            ]);
    }

	 public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $transaksifikModel = new \App\Models\TransaksiFikModel();
        $delete = $transaksifikModel->delete($id);

        return redirect()->to(site_url('transaksifik/index'));
    }
}	