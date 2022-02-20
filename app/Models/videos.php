<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class videos extends Model
{
    use HasFactory;
    protected $table = 'videos';
    protected $fillable = [
        'video',
        'user_id',
        'name'
    ];
}
