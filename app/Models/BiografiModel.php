<?php namespace App\Models;

use CodeIgniter\Model;

class BiografiModel extends Model
{
    protected $table = 'biografi';
    protected $primaryKey = 'id';
    protected $allowedFields = [
        'judul','stok','gambar','penerbit',
        'pengarang','kategori'
    ];
    protected $returnType = 'App\Entities\Biografi';
    protected $useTimestamps = false;

    public function search($keyword){
        // $builder = $this->table('biografi');
        // $builder->like('judul', $keyword);
        // return $builder;
        return $this->table('biografi')->like('judul', $keyword);
    }
}