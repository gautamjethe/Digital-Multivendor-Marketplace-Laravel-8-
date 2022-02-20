<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Products extends Model
{
    use HasFactory;
    protected $table = 'products';
    
    protected $fillable = [
        'product_slug',
        'product_name',
        'product_shortdes',
        'product_longdes',
        'product_features',
        'product_image',
        'image_name',
        'changelogs',
        'mainfile_path',
        'mainfile_name',
        'version',
        'downloads',
        'user_id',
        'author_name',
        'updated'
    ];
}
