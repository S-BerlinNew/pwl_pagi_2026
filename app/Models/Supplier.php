<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Supplier extends Model
{
    //
    protected $table = 'suppliers';
    protected $guarded = ['id'];
    public $timestamps = true; 

    public function products()
    {
        return $this->hasMany(Product::class, 'supplier_id', 'id');
    }
}
