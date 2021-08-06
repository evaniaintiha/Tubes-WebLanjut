<?php

namespace App\Entities;

use CodeIgniter\Entity;

class Alatkantor extends Entity
{
    public function setGambar($file)
    {
        if (!is_string($file)) {
            $fileName = $file->getRandomName();
            $writePath = './uploads';
            $file->move($writePath, $fileName);
            $this->attributes['gambar'] = $fileName;
            return $this;
        } else {
            $this->attributes['gambar'] = $file;
            return $this;
        }
    }

    public function setGambar2($file)
    {
        if (!is_string($file)) {
            $fileName = $file->getRandomName();
            $writePath = './uploads';
            $file->move($writePath, $fileName);
            $this->attributes['gambar2'] = $fileName;
            return $this;
        } else {
            $this->attributes['gambar2'] = $file;
            return $this;
        }
    }
}
