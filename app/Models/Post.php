<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Post extends Model
{
    use HasFactory, SoftDeletes;
    protected $fillable = [
        'user_id',
        'title',
        'caption',
        'content_type',
        'status',
        'hashtag',
        'published_at',
    ];
    protected $casts = [
        'hashtag' => 'array',
        'published_at' => 'datetime',
        'content_type' => 'integer',
        'status' => 'integer',
    ];
}
