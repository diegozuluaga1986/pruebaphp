<?php 
namespace App\Models;

use CodeIgniter\Model;

class Producto extends Model{
    protected $table      = 'productos';
    // Uncomment below if you want add primary key
     protected $primaryKey = 'id';
     protected $allowedFields=['Nombre_Producto','Referencia','Precio','Peso', 'Categoria', 'Stock', 'Fecha'];
}