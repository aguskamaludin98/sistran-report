<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class problem extends Model
{
    protected $table = "problems";
    protected $fillable = ['id','problem_name','description'];
}
