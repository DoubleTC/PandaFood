<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $table = 'pdf_categories';
    protected $primaryKey = 'category_id';
    protected $guarded = [];
}
