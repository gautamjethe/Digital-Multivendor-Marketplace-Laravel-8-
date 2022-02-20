<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class blogcomments extends Model
{
    use HasFactory;
    protected $table = 'blogcomments';

    protected $fillable = [
        'content',
        'uid',
        'username',
        'email',
        'blog_id'       
        
    ];
}
