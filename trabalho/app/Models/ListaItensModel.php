<?php

namespace App\Models;

use CodeIgniter\Model;

class ListaItensModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'ListaItens';
    protected $primaryKey       = 'idLista';
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'idPedido',
        'idItem'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';
}
