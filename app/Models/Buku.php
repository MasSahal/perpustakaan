<?php

namespace App\Models;

use CodeIgniter\Model;

class Buku extends Model
{
    protected $table      = 'buku';
    protected $primaryKey = 'id';

    protected $allowedFields = [
        'judul',
        'penerbit',
        'pengarang',
        'tahun_terbit',
        'sinopsis'
    ];
    protected $returnType     = 'object';
}
