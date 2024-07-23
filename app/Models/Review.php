<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends BaseModel
{
    use HasFactory, SoftDeletes;

    protected $fillable = [
        'food_item_id',
        'user_id',
        'rating',
        'comment',
    ];

    public function food_item()
    {
        return $this->belongsTo(FoodItem::class);
    }

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
