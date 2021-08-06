<?php

namespace App\Controllers;

use App\Models\AlatstudioModel;
use App\Models\AlatangkutanModel;
use App\Models\AlatkantorModel;
use App\Models\KomputerModel;
use App\Models\TanahModel;

class Keseluruhan extends BaseController
{
    protected $alatstudioModel;
    protected $alatangkutanModel;
    protected $alatkantorModel;
    protected $komputerModel;
    protected $tanahModel;

    public function __construct()
    {
        $this->alatstudioModel = new AlatstudioModel();
        $this->alatangkutanModel = new AlatangkutanModel();
        $this->alatkantorModel = new AlatkantorModel();
        $this->komputerModel = new KomputerModel();
        $this->tanahModel = new TanahModel();

        helper('form');
        $this->validation = \Config\Services::validation();
        $this->session = session();
    }

    public function index()
    {

        $alatstudios = $this->alatstudioModel->findAll();
        $alatangkutan = $this->alatangkutanModel->findAll();
        $alatkantor = $this->alatkantorModel->findAll();
        $komputer = $this->komputerModel->findAll();
        $tanah = $this->tanahModel->findAll();


        if (session()->get('role') == 0) {
            return view('keseluruhan/index', [
                'data' => array($tanah, $alatangkutan, $alatkantor, $alatstudios, $komputer),
                'alatstudios' => $alatstudios,
                'alatangkutan' => $alatangkutan,
                'alatkantor' => $alatkantor,
                'komputer' => $komputer,
                'tanah' => $tanah
            ]);
        } else {
            return view('keseluruhans/index', [
                'data' => array($tanah, $alatangkutan, $alatkantor, $alatstudios, $komputer),
                'alatstudios' => $alatstudios,
                'alatangkutan' => $alatangkutan,
                'alatkantor' => $alatkantor,
                'komputer' => $komputer,
                'tanah' => $tanah
            ]);
        }
    }
}
