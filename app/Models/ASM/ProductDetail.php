<?php

namespace App\Models\ASM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProductDetail extends Model
{
    use HasFactory;
    protected $fillable = [
        'product_id',
        'price',
        'introduce',
    ];
    public function product(){
        return $this->belongsTo(Product::class);
    }
}
