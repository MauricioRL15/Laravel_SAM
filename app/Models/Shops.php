<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shops extends Model
{
    
    protected $table = 'Shops';

    protected $primaryKey = 'ShopID';
    protected $ShopName = 'ShopName';
    protected $city = 'City';
    protected $address = ['Address'];
    protected $phoneNum = 'PhoneNum';
    protected $Manager = 'Manager';

    //use HasFactory;
}
