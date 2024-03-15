<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Catalog extends Model
{
    use HasFactory;

    public $fillable=[
        'name',
        'parent_id'
    ];

    public function children(){
       return $this->hasMany(Catalog::class, 'parent_id');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
