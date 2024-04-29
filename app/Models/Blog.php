<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Blog extends Model
{
    use HasFactory;
    protected $table = 'blogs';
    protected $fillables = [
        'title',
        'context',
        'expire_date',
        'user_id',
        'date_created',
        'date_updated'
    ];
}
