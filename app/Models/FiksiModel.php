<?php namespace App\Models;

use CodeIgniter\Model;

class FiksiModel extends Model
{
    protected $table = 'fiksi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'judul','stok','gambar','penerbit',
        'pengarang','kategori'
    ];
    protected $returnType = 'App\Entities\Fiksi';
    protected $useTimestamps = false;

    public function search($keyword){
        // $builder = $this->table('fiksi');
        // $builder->like('judul', $keyword);
        // return $builder;
        return $this->table('fiksi')->like('judul', $keyword);
    }
}