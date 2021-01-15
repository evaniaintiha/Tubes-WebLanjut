<?php
namespace App\Controllers;

class TransaksiEdu extends BaseController
{
	public function __construct()
	{
		helper('form');
		$this->validation = \Config\Services::validation();
		$this->session = session();
	}

	 public function index()
    {
        
        $TransaksieduModel = new \App\Models\TransaksiEduModel();
        $transaksiedu = $TransaksieduModel->findAll();

            return view('peminjamedu/index',[
            'transaksiedu'=>$transaksiedu,
        ]);
    }

     public function vieww()
    {
        $id = $this->request->uri->getSegment(3);
        $TransaksieduModel = new \App\Models\TransaksiEduModel();
        $transaksiedu = $TransaksieduModel->find($id);

        return view('peminjamedu/view',[
            'transaksiedu' => $transaksiedu,
        ]);
    }


	public function view()
	{
		$id = $this->request->uri->getSegment(3);

		$transaksieduModel = new \App\Models\TransaksiEduModel();
		$transaksiedu = $transaksieduModel->select('*, transaksiedu.id AS id_trans')->join('edukasi', 'edukasi.id=transaksiedu.id_edukasi')
					->join('user', 'user.id=transaksiedu.id_peminjam')
					->where('transaksiedu.id', $id)
					->first();

		return view('transaksiedu/view',[
			'transaksiedu'=>$transaksiedu,
		]);
	}

	public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $transaksieduModel = new \App\Models\TransaksiEduModel();
        $transaksiedu = $transaksieduModel->find($id);

        if($this->request->getPost())
        {
            $data = $this->request->getPost();
            $this->validation->run($data, 'transaksieduupdate');
            $errors = $this->validation->getErrors();

            if(!$errors)
            {
                $b = new \App\Entities\TransaksiEdu();
                $b->id = $id;
                $b->fill($data);
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $transaksieduModel->save($b);

                $segments = ['transaksiedu','vieww',$id];

                return redirect()->to(base_url($segments));
            }
        }
        return view('peminjamedu/update',[
            'transaksiedu' => $transaksiedu,
            ]);
    }

	   public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $transaksieduModel = new \App\Models\TransaksiEduModel();
        $delete = $transaksieduModel->delete($id);

        return redirect()->to(site_url('transaksiedu/index'));
    }
}