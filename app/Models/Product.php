<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $table = 'pdf_products';
    protected $primaryKey = 'product_id';
    protected $guarded = [];
}
