<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class supplier extends Model
{
    //
    protected $table = 'suppliers';
    protected $guarded = ['id'];
    public $timestamps = true; 
}
