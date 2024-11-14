<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Payrolls extends Model
{
    use HasFactory;

    protected $fillable = [
        'users_id',
        'salary',
        'paid_at',
    ];
    public function users()
    {
        return $this->belongsTo(User::class);
    }
}
