<?php namespace App\Models;

use CodeIgniter\Model;

class TransaksiEduModel extends Model
{
	protected $table = 'transaksiedu';
	protected $primaryKey = 'id';
	protected $allowedFields = [
        'id_edukasi', 'id_peminjam', 'jumlah', 'denda', 'dl_pengembalian',
        'status', 'created_date', 'created_by','updated_date','updated_by'
	];
	protected $returnType = 'App\Entities\TransaksiEdu';
	protected $useTimestamps = false;
}