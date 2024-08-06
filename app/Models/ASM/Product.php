<?php

namespace App\Models\ASM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'category_id',
        'description',
        'views',
        'image',
    ];
    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
