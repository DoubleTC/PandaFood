<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    protected $table = 'pdf_orders';
    protected $primaryKey = 'order_id';
}
