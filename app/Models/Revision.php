<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Revision extends Model
{
    use HasFactory;
    protected $fillable = [
        'post_id',
        'user_id',
        'comment',
        'revised_at',
        'revision_number',
    ];
    protected $casts = [
        'revised_at' => 'datetime',
    ];
}
