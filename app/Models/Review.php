<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Review extends Model
{
    use HasFactory;
    public $fillable=[
        'user_id',
        'comment',
        'picture',
        'status',
        'mark'
    ];
}
