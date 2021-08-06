<?php namespace App\Controllers;

class User extends BaseController
{
    public function __construct(){
        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {
        
        $UserModel = new \App\Models\UserModel();
        $users = $UserModel->findAll();

            return view('user/index',[
            'users'=>$users,
        ]);
    }

    public function view()
    {
        $id = $this->request->uri->getSegment(3);
        $userModel = new \App\Models\UserModel();
        $user = $userModel->find($id);

        return view('user/view', [
            'user' => $user,
        ]);
    }

    public function create()
    {
        $userModel = new \App\Models\UserModel();
        $users = $userModel->findAll();

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'user');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $userModel = new \App\Models\UserModel();
                $user = new \App\Entities\User();

                $user->fill($data);
                $user->gambar = $this->request->getFile('gambar');
                $user->created_by = $this->session->get('id');
                $user->created_date = date("Y-m-d H:i:s");

                $userModel->save($user);

                $id = $userModel->insertID();
                $segments = ['user', 'view', $id];
                
                return redirect()->to(site_url('user/index'));
            }
        }
        return view('user/create');
    }



    public function update()
    {
        $id = $this->request->uri->getSegment(3);

        $userModel = new \App\Models\UserModel();
        $user = $userModel->find($id);

        if ($this->request->getPost()) {
            $data = $this->request->getPost();
            $this->validation->run($data, 'userupdate');
            $errors = $this->validation->getErrors();

            if (!$errors) {
                $b = new \App\Entities\User();
                $b->id = $id;
                $b->fill($data);

                if ($this->request->getFile('gambar')->isValid()) {
                    $b->gambar = $this->request->getFile('gambar');
                }
                $b->updated_by = $this->session->get('id');
                $b->updated_date = date("Y-m-d H:i:s");

                $userModel->save($b);

                $segments = ['User', 'view', $id];

                return redirect()->to(base_url($segments));
            }
        }

        return view('user/update', [
            'user' => $user,
        ]);
    }

    public function delete()
    {
        $id = $this->request->uri->getSegment(3);

        $modelUser = new \App\Models\UserModel();
        $delete = $modelUser->delete($id);

        return redirect()->to(site_url('user/index'));
    }
}