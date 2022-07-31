<?php

namespace App\Models;

use CodeIgniter\Model;

class PedidoModel extends Model
{
    //configuracao base do banco
    protected $DBGroup          = 'default';
    protected $table            = 'Pedido';
    protected $primaryKey       = ['idListaPrato','idusuario'];
    protected $useAutoIncrement = true;
    protected $insertID         = 0;
    protected $returnType       = 'array';
    protected $useSoftDeletes   = true;
    protected $protectFields    = true;
    protected $allowedFields    = [
        'valor_total'
    ];

    // Dates
    protected $useTimestamps = true;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

}