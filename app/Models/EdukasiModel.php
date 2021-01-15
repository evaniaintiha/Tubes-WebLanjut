<?php namespace App\Models;

use CodeIgniter\Model;

class EdukasiModel extends Model
{
    protected $table = 'edukasi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'judul','stok','gambar','penerbit',
        'pengarang','kategori'
    ];
    protected $returnType = 'App\Entities\Edukasi';
    protected $useTimestamps = false;

    public function search($keyword){
        // $builder = $this->table('edukasi');
        // $builder->like('judul', $keyword);
        // return $builder;
        return $this->table('edukasi')->like('judul', $keyword);
    }
}