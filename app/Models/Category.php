<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Model\Product;

class Category extends Model
{
    protected $fillable = [
        'name',
        'slug',
    ];

    public function product()
    {
        return $this->hasMany(Product::class);
    }
}
