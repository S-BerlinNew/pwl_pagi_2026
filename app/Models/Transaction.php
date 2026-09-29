<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class transaction extends Model
{
    //
    protected $table = 'transactions';
    protected $guarded = ['id'];
    public $timestamps = true; 

    public function transactionDetails() {
        return $this->hasMany(TransactionDetail::class, 'transaction_id', 'id');
    }

    public function supplier() {
        return $this->belongsTo(Supplier::class, 'supplier_id', 'id');
    }
}
