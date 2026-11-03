<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    // cara simpel
    protected $table = 'products';
    protected $guarded = ['id'];
    public $timestamps = true; 

    public function supplier() {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }

    // cara ke dua untuk protected selain id 
    // protected $fillable = [
    //     'barcode_number';
    //     'product_name';
    //     'buy_price';
    //     'sell_price';
    // ];
}
