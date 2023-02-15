<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{

    // con lo siguiente configuras la tabla que utilizará el modelo
    protected $table = 'Product';

    // y con esto especificas el nombre de la llave primaria de la tabla
    protected $primaryKey = 'OrderID';
    protected $productid = 'ProductID';
    protected $amount = 'Amount';
    
    
    //$table -> int("ProductID");
    //$table -> int("Amount");
    // el resto del código.. por ejemplo relaciones con otros modelos


    //use HasFactory;
}
