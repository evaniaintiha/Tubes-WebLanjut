<?php namespace App\Models;

use CodeIgniter\Model;

class KategoriModel extends Model
{
    protected $table = 'kategori';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'sub','kategori'
    ];
    protected $returnType = 'App\Entities\Kategori';
    protected $useTimestamps = false;

    public function search($keyword){
        // $builder = $this->table('edukasi');
        // $builder->like('judul', $keyword);
        // return $builder;
        return $this->table('alatstudio')->like('merk', $keyword);
    }
}