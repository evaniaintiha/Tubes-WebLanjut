<?php

namespace App\Controllers;

use App\Models\AlatstudioModel;
use App\Models\AlatangkutanModel;
use App\Models\AlatkantorModel;
use App\Models\KomputerModel;
use App\Models\TanahModel;

class Home extends BaseController
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
	}

	public function index()
	{
		$alatstudios = $this->alatstudioModel->selectSum('anggaran')->get()->getRowArray();
		$alatangkutan = $this->alatangkutanModel->selectSum('anggaran')->get()->getRowArray();
		$alatkantor = $this->alatkantorModel->selectSum('anggaran')->get()->getRowArray();
		$komputer = $this->komputerModel->selectSum('anggaran')->get()->getRowArray();
		$tanah = $this->tanahModel->selectSum('anggaran')->get()->getRowArray();

		$total_anggaran = $alatangkutan['anggaran'] + $alatstudios['anggaran'] + $alatkantor['anggaran'] + $komputer['anggaran'] + $tanah['anggaran'];

		$data['total'] = $total_anggaran;

		return view('home', $data);
	}

	//--------------------------------------------------------------------

}
