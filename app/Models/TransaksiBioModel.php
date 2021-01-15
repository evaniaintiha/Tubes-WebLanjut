<?php namespace App\Models;

use CodeIgniter\Model;

class TransaksiBioModel extends Model
{
	protected $table = 'transaksibio';
	protected $primaryKey = 'id';
	protected $allowedFields = [
        'id_biografi', 'id_peminjam', 'jumlah', 'denda', 'dl_pengembalian',
        'status', 'created_date','created_by','updated_date','updated_by'
	];
	protected $returnType = 'App\Entities\TransaksiBio';
	protected $useTimestamps = false;
}