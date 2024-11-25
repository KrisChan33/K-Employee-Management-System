<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PerformanceReviews extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'rating',
        'review_date',
        'feedback',
    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }
}