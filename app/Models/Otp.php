<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Otp extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'medium',
        'otp',
        'used',
        'expires_at'
    ];

    public function user()
    {
        return $this->belongsTo(User::class, 'user_id');
    }
}
