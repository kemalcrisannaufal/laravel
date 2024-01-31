<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;

    protected $fillable = [
        "name", "price", "image", "brand_id"
    ];

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function sellers(){
        return $this->hasMany(Seller::class);
    }

    public function categories() {
        return $this->belongsToMany(Category::class, 'product_category');
    }
}
