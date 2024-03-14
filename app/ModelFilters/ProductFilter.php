<?php

namespace App\ModelFilters;

use EloquentFilter\ModelFilter;

class ProductFilter extends ModelFilter
{
    /**
    * Related Models that have ModelFilters as well as the method on the ModelFilter
    * As [relationMethod => [input_key1, input_key2]].
    *
    * @var array
    */
    public $relations = [];

    public function catalog($catalog_id){
        return $this->where('catalog_id', $catalog_id);
    }

    public function name($name){
        return $this->where('name','LIKE', '%'.$name.'%');
    }

    public function priceMin($price){
        return $this->where('price', '>=', $price);
    }

    public function priceMax($val){
        return $this->where('price', '<=', $val);
    }

    public function catalogName($value){
        return $this->whereHas('catalog', function($query) use ($value){
            return $query->where('name', 'LIKE', '%'.$value.'%');
        });
    }
}
