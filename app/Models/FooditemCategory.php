<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class FoodItemCategory extends Model
{
    use HasFactory;

    protected $fillable = [
        'category_id',
        'food_item_id',
    ];
}
