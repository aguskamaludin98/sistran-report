<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class equipment extends Model
{
    protected $table = "equipment";
    protected $fillable = ['id','equipment_name','description'];
}
