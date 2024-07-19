<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodItem extends Model
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'description',
        'name',
        'tags',
        'order',
        'price',
        'image',
        'rating',
        'status',
    ];
    public function categories()
    {
        return $this->belongsToMany(Category::class, 'food_item_categories');
    }

    public function syncCategories($categoryIds)
    {
        $this->categories()->sync($categoryIds);
    }
}
