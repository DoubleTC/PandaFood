<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Shipper extends Model
{
    protected $table = 'pdf_shippers';
    protected $primaryKey = 'shipper_id';
    public $timestamps = false;
}
