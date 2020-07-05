<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = [
    	'name', 'category_id'
    ];


    public function category() {
    	return $this->belongsTo(Category::class);
    }
    public function product_detail() {
    	return $this->hasOne(ProductDetail::class);
    }
    public function product_description() {
    	return $this->hasOne(ProductDescription::class);
    }

    public function product_images() {
    	return $this->hasMany(ProductImage::class);
    }
}
