<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendances extends Model
{
    use HasFactory;
    protected $fillable = [
        'user_id',
        'date',
        'status',
        // 'time_in',
        // 'time_out',
    ];

    public static function boot()
    {
        parent::boot();
        static::creating(function ($attendance) {
            $attendance->user_id = auth()->id();
            $attendance->date = now();
        });
    }

    public function user(){
        return $this->belongsTo(User::class);
    }
}
