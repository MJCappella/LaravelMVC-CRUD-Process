<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductsModel extends Model
{
    use HasFactory;

    // Table name
    protected $table='products'; 

    // data to be filled in the columns
    protected $fillable=[
        'productname',
        'productquantity',
        'productprice',
        'productdescription',
    ];
}
