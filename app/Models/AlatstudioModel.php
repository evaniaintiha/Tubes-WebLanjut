<?php

namespace App\Models;

use CodeIgniter\Model;

class AlatstudioModel extends Model
{
    protected $table = 'alatstudio';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'merk', 'ruang', 'gambar', 'gambar2', 'status',
        'catatan', 'tahun', 'perawatan', 'anggaran', 'kode', 'created_date'
    ];
    protected $returnType = 'App\Entities\Alatstudio';
    protected $useTimestamps = false;

    public function search($keyword)
    {
        // $builder = $this->table('edukasi');
        // $builder->like('judul', $keyword);
        // return $builder;
        return $this->table('alatstudio')->like('merk', $keyword);
    }
}
