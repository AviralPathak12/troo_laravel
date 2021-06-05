<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $guarded = [];

    public function parent(){
        return $this->hasMany(Category::class,'category_id');
    }

    public function nested_parent(){
        return $this->hasMany(Category::class)->with('parent');
    }


    public function product(){
        return $this->belongsToMany(Product::class,'category_product')->withTimestamps();
    }
}
