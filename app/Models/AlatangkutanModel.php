<?php

namespace App\Models;

use CodeIgniter\Model;

class AlatangkutanModel extends Model
{
    protected $table = 'alatangkutan';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'merk', 'ruang', 'gambar', 'gambar2', 'status',
        'catatan', 'tahun', 'perawatan', 'anggaran', 'kode', 'created_date'
    ];
    protected $returnType = 'App\Entities\Alatangkutan';
    protected $useTimestamps = false;

    public function search($keyword)
    {
        // $builder = $this->table('edukasi');
        // $builder->like('judul', $keyword);
        // return $builder;
        return $this->table('alatangkutan')->like('merk', $keyword);
    }
}
