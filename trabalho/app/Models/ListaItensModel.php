<?php

namespace App\Models;

use CodeIgniter\Model;

class ListaItensModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ListaItens';
    protected $primaryKey       = 'idListaPratos';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'idpratos'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
