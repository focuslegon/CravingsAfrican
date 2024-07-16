<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Notification extends BaseModel
{

    protected $fillable = [
        'user_id',
        'title',
        'message',
        'type',
        'icon',
        'img',
        'link',
        'status',
        'sent',
        'is_read',
    ];

    protected $casts = [
        'is_read' => 'boolean',
        'sent' => 'boolean',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
    
}
