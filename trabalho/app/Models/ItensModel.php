<?php

namespace App\Models;

use CodeIgniter\Model;

class ItensModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'itens';
    protected $primaryKey       = 'idItem';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'nome',
        'preco',
        'descricao'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
