<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Review extends Model
{
    use HasFactory, SoftDeletes;
    public $fillable=[
        'user_id',
        'comment',
        'picture',
        'status',
        'mark'
    ];

    public function review(){
        return $this->hasMany(Review::class);
    }
}
