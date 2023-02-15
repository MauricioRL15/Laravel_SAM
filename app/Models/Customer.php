<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    protected $table = 'Customer';
    
    protected $phoneNum = 'phoneNum';
    protected $customerID = 'customerID';

    
    //use HasFactory;
}
