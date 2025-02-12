<?php

namespace App\Models\Logs;

use App\Models\BaseModel;
use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ActivityLog extends BaseModel
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'ip_address',
        'description',
        'details',
        // Add other fillable attributes as needed for other details about the activity log
    ];

    // Define the relationship with users (optional, if you want to associate activity logs with specific users)
    public function user()
    {
        return $this->belongsTo(User::class);
    }
}
