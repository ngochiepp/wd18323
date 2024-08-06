<?php

namespace App\Models\ASM;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Manga extends Model
{
    use HasFactory;
    protected $fillable = [
        'title',
        'introduce',
        'price',
        'sold',
        'image_url',
        'category_id',
    ];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
}
