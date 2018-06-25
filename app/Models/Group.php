<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Group extends Model
{
    protected $table = 'pdf_groups';
    protected $primaryKey = 'group_id';
    public $timestamps = false;
}
