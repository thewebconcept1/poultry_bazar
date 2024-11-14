<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Media extends Model
{
    use HasFactory;

    protected $table = 'media';

    protected $primaryKey = 'media_id';

    protected $fillable = [
        'added_user_id',
        'category_id',
        'media_title',
        'media_image',
        'media_description',
        'media_author',
        'media_status',
        'media_type',
    ];

    public $timestamps = false;
}
