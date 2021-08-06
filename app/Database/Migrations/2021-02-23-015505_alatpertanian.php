<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Alatpertanian extends Migration
{
	public function up()
	{
		$this->forge->addField([
			'id'=>[
				'type'=>'INT',
				'constraint'=>11,
				'unsigned'=>TRUE,
				'auto_increment'=>TRUE
			],
			'kode'=>[
				'type'=>'VARCHAR',
				'constraint'=>100,
			],
			'ruang'=>[
				'type'=>'VARCHAR',
				'constraint'=>50,
			],
			'gambar'=>[
				'type'=>'TEXT',
				'null'=>TRUE,
			],
			'tahun'=>[
				'type'=>'INT',
				'constraint'=>11,	
			],
			
			'created_date'=>[
				'type' => 'DATETIME',
			],

			'merk'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
			],
			'status'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
				'null'=>TRUE,
			],
			'catatan'=>[
				'type'=>'VARCHAR',
				'constraint'=>300,
				'null'=>TRUE,
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('alatpertanian');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('alatpertanian');
	}
}
