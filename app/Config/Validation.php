<?php namespace Config;

class Validation
{
	//--------------------------------------------------------------------
	// Setup
	//--------------------------------------------------------------------

	/**
	 * Stores the classes that contain the
	 * rules that are available.
	 *
	 * @var array
	 */
	public $ruleSets = [
		\CodeIgniter\Validation\Rules::class,
		\CodeIgniter\Validation\FormatRules::class,
		\CodeIgniter\Validation\FileRules::class,
		\CodeIgniter\Validation\CreditCardRules::class,
	];

	/**
	 * Specifies the views that are used to display the
	 * errors.
	 *
	 * @var array
	 */
	public $templates = [
		'list'   => 'CodeIgniter\Validation\Views\list',
		'single' => 'CodeIgniter\Validation\Views\single',
	];

	//--------------------------------------------------------------------
	// Rules
	//--------------------------------------------------------------------
	public $register = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
		'repeatPassword'=>[
			'rules' => 'required|matches[password]',
		],
	];

	public $register_errors = [
		'username' => [
			'required' =>'{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
		'repeatPassword'=>[
			'required' => '{field} Harus Diisi',
			'matches' => '{field} Tidak Match Dengan Password'
		],
	];

	public $login = [
		'username' => [
			'rules' => 'required|min_length[5]',
		],
		'password' => [
			'rules' => 'required',
		],
	];


	public $login_errors = [
		'username' => [
			'required' =>'{field} Harus Diisi',
			'min_length' => '{field} Minimal 5 Karakter',
		],
		'password' => [
			'required' => '{field} Harus Diisi',
		],
	];

	public $tanah = [
		'ruang' => [
			'rules' => 'required|min_length[1]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'kode' => [
			'rules' => 'required|min_length[18]',
			'rules' => 'required|max_length[18]',
		],

			];

	public $tanah_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 1 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kode' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 18 karakter',
			'max_length' => '{field} Minimum 18 karakter',
		],

	];

	public $tanahupdate = [
		'ruang' => [
			'rules' => 'required|min_length[1]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'status' => [
			'rules' => 'required|min_length[3]',
		],
		'catatan' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $tanahupdate_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 1 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'status' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'catatan' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

	public $alatbesar = [
		'ruang' => [
			'rules' => 'required|min_length[1]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'kode' => [
			'rules' => 'required|min_length[3]',
		],

			];

	public $alatbesar_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 1 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kode' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],

	];

	public $alatbesarupdate = [
		'ruang' => [
			'rules' => 'required|min_length[1]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'status' => [
			'rules' => 'required|min_length[3]',
		],
		'catatan' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $alatbesarupdate_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'status' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'catatan' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];
	
		public $alatangkutan = [
		'ruang' => [
			'rules' => 'required|min_length[1]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'kode' => [
			'rules' => 'required|min_length[18]',
			'rules' => 'required|max_length[18]',

		],

			];

	public $alatangkutan_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 1 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kode' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
			'max_length' => '{field} Maximum 18 karakter',
		],

	];

	public $alatangkutanupdate = [
		'ruang' => [
			'rules' => 'required|min_length[1]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'status' => [
			'rules' => 'required|min_length[3]',
		],
		'catatan' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $alatangkutanupdate_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 1 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'status' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'catatan' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

	public $alatbengkelukur = [
		'ruang' => [
			'rules' => 'required|min_length[3]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'kode' => [
			'rules' => 'required|min_length[3]',
			'rules' => 'required|max_length[18]',
		],

			];

	public $alatbengkelukur_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kode' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
			'max_length' => '{field} Maximum 18 karakter',
		],

	];

	public $alatbengkelukurupdate = [
		'ruang' => [
			'rules' => 'required|min_length[3]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'status' => [
			'rules' => 'required|min_length[3]',
		],
		'catatan' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $alatbengkelukurupdate_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'status' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'catatan' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

	public $alatpertanian = [
		'ruang' => [
			'rules' => 'required|min_length[3]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'kode' => [
			'rules' => 'required|min_length[3]',
			'rules' => 'required|max_length[18]',
		],

			];

	public $alatpertanian_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kode' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
			'rules' => 'required|max_length[18]',
		],

	];

	public $alatpertanianupdate = [
		'ruang' => [
			'rules' => 'required|min_length[3]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'status' => [
			'rules' => 'required|min_length[3]',
		],
		'catatan' => [
			'rules' => 'required|min_length[3]',

		],
	];

	public $alatpertanianupdate_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'status' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'catatan' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

		public $alatkantor = [
		'ruang' => [
			'rules' => 'required|min_length[3]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'kode' => [
			'rules' => 'required|min_length[3]',
			'rules' => 'required|max_length[18]',
		],

			];

	public $alatkantor_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kode' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
			'max_length' => '{field} Maximum 18 karakter',
		],

	];

	public $alatkantorupdate = [
		'ruang' => [
			'rules' => 'required|min_length[3]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'status' => [
			'rules' => 'required|min_length[3]',
		],
		'catatan' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $alatkantorupdate_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'status' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'catatan' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

		public $alatstudio = [
		'ruang' => [
			'rules' => 'required|min_length[3]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'kode' => [
			'rules' => 'required|min_length[3]',
			'rules' => 'required|max_length[18]',
		],

			];

	public $alatstudio_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kode' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
			'max_length' => '{field} Maximum 18 karakter',
		],

	];

	public $alatstudioupdate = [
		'ruang' => [
			'rules' => 'required|min_length[3]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'status' => [
			'rules' => 'required|min_length[3]',
		],
		'catatan' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $alatstudioupdate_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'status' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'catatan' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

		public $komputer = [
		'ruang' => [
			'rules' => 'required|min_length[3]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'kode' => [
			'rules' => 'required|min_length[3]',
			'rules' => 'required|max_length[18]',
		],


			];

	public $komputer_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kode' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
			'max_length' => '{field} Maximum 18 karakter',
		],

	];

	public $komputerupdate = [
		'ruang' => [
			'rules' => 'required|min_length[3]',
		],
		'tahun' => [
			'rules' => 'required|is_natural',
		],
		'merk' => [
			'rules' => 'required|min_length[3]',
		],
		'status' => [
			'rules' => 'required|min_length[3]',
		],
		'catatan' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $komputerupdate_errors = [
		'ruang' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'tahun' => [
			'required' => '{field} Harus diisi',
			'is_natural' => '{field} Tidak Boleh Negatif',
		],
		'merk' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'status' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'catatan' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

			public $kategori = [
		'sub' => [
			'rules' => 'required|min_length[3]',
		],
		'kategori' => [
			'rules' => 'required|min_length[3]',
		],

			];

	public $kategori_errors = [
		'sub' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kategori' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],

	];

	public $kategoriupdate = [
		'sub' => [
			'rules' => 'required|min_length[3]',
		],
		'kategori' => [
			'rules' => 'required|min_length[3]',
		],
	];

	public $kategoriupdate_errors = [
		'sub' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'kategori' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
	];

	public $user = [
		'username' => [
			'rules' => 'required|min_length[3]',
		],
		'password' => [
			'rules' => 'required|min_length[3]',
		],

			];

	public $user_errors = [
		'username' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],
		'password' => [
			'required' => '{field} Harus diisi',
			'min_length' => '{field} Minimum 3 karakter',
		],

	];
}