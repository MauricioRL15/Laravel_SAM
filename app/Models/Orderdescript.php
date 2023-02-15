<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Orderdescript extends Model
{
    
    protected $table = 'Orderscript';
    
    protected $primaryKey = 'orderID';
    protected $ShopID = 'ShopID';
    protected $CustomerID = 'CustomerID';
    protected $orderStatus = 'orderStatus';
    protected $payment = 'payment';
    protected $orderDate = 'orderDate';
    protected $orderAddress = 'orderAddress';
    protected $totalprice = 'totalprice';
    
    //use HasFactory;
}
