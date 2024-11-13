<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Attendances extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'date',
        'status',
        // 'time_in',
        // 'time_out',
    ];

    public function users(){
        return $this->belongsTo(User::class);
    }
}
