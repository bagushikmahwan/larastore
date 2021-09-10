<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Order extends Model
{
    //kalau tabel di db ga jama maka harus di definisikan ulang $table = 'namatabel';s
    use SoftDeletes;

    protected $guarded = [];

    public function users(){
        return $this->belongsTo(User::class);
    }
    public function customer(){
        return $this->belongsTo(Customer::class);
    }
    public function products(){
        return $this->belongsToMany(Product::class, 'order_details')->withPivot('qty','total');
    }
}
