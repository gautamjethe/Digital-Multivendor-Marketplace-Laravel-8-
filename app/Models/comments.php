<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class comments extends Model
{
    use HasFactory;
    protected $table = 'comments';

    protected $fillable = [
        'content',
        'user_id',
        'username',
        'email',
        'product_id'       
        
    ];

    function user(){
        return $this->belongsTo('App\Models\User','user_id','id');
    }
}
