<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;

class LeaveRequest extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'start_date',
        'end_date',
        'status',
        'reason',
        'status',
    ];

    public function users():BelongsTo
    {
        return $this->belongsTo(User::class);
    }
}
