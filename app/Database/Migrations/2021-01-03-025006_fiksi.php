<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class Fiksi extends Migration
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
			'judul'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
			],
			'gambar'=>[
				'type'=>'TEXT',
			],
			'stok'=>[
				'type'=>'INT',
				'constraint'=>11,	
			],
			'pengarang'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
			],
			'penerbit'=>[
				'type'=>'VARCHAR',
				'constraint'=>250,
			],
			'kategori'=>[
				'type'=>'VARCHAR',
				'constraint'=>30,
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->createTable('fiksi');
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('fiksi');
	}
}
