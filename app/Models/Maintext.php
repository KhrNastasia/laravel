<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Maintext extends Model
{
    use HasFactory;
    public $fillable = [
        'name',
        'body',
        'url',
        'lang'
    ];
}
