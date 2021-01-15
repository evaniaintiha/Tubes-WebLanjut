<?php namespace App\Models;

use CodeIgniter\Model;

class TransaksiFikModel extends Model
{
	protected $table = 'transaksifik';
	protected $primaryKey = 'id';
	protected $allowedFields = [
        'id_fiksi', 'id_peminjam', 'jumlah', 'denda', 'dl_pengembalian',
        'status', 'created_date', 'created_by','updated_date','updated_by'
	];
	protected $returnType = 'App\Entities\TransaksiFik';
	protected $useTimestamps = false;
}