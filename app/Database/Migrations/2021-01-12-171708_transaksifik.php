<?php namespace App\Database\Migrations;

use CodeIgniter\Database\Migration;

class TransaksiFik extends Migration
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
			'id_fiksi'=>[
				'type'=>'INT',
				'constraint'=>11,
				'unsigned'=>TRUE,
			],
			'id_peminjam'=>[
				'type'=>'INT',
				'constraint'=>11,
				'unsigned'=>TRUE,
			],
			'jumlah'=>[
				'type'=>'INT',
				'constraint'=>11,
			],
			'denda'=>[
				'type'=>'VARCHAR',
				'constraint'=>50,
			],
			'dl_pengembalian'=>[
				'type'=>'VARCHAR',
				'constraint'=>50,
			],
			'status'=>[
				'type'=>'VARCHAR',
				'constraint'=>50,
			],
			'created_by'=>[
				'type' => 'INT',
				'constraint' => 11,
			],
			'created_date'=>[
				'type' => 'DATETIME',
			],
			'updated_by'=>[
				'type' => 'INT',
				'constraint' => 11,
				'null' => TRUE,
			],
			'updated_date'=>[
				'type'=>'DATETIME',
				'null'=>TRUE,
			]
		]);

		$this->forge->addKey('id', TRUE);
		$this->forge->addForeignKey('id_peminjam','user','id');
		$this->forge->addForeignKey('id_fiksi','fiksi','id');
		$this->forge->createTable('transaksifik');

		$this->forge->dropForeignKey('transaksifik','transaksifik_id_fiksi_foreign');
		$this->forge->dropForeignKey('transaksifik','transaksifik_id_peminjam_foreign');

		$this->forge->addColumn('transaksifik', [
    		'CONSTRAINT transaksifik_id_peminjam_foreign FOREIGN KEY(id_peminjam) REFERENCES user(id) ON DELETE NO ACTION ON UPDATE CASCADE',
		]);

		$this->forge->addColumn('transaksifik',[
			'CONSTRAINT transaksifik_id_fiksi_foreign FOREIGN KEY(id_fiksi) REFERENCES fiksi(id) ON DELETE NO ACTION ON UPDATE CASCADE',
		]);
	}

	//--------------------------------------------------------------------

	public function down()
	{
		$this->forge->dropTable('transaksifik');

		$this->forge->addColumn('transaksifik', [
    		'CONSTRAINT transaksifik_id_peminjam_foreign FOREIGN KEY(id_peminjam) REFERENCES user(id)',
		]);

		$this->forge->addColumn('transaksifik', [
    		'CONSTRAINT transaksifik_id_fiksi_foreign FOREIGN KEY(id_fiksi) REFERENCES fiksi(id)',
		]);
	}
}
