<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    use HasFactory;
    public $fillable=[
        'name',
        'price',
        'catalog_id',
        'sale',
        'sale_measure',
        'picture',
        'fulldescription',
        'description',
        'articul'
    ];

    public function catalog(){
        return $this->belongsTo(Catalog::class);
    }
}
