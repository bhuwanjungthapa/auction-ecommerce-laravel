<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use App\Models\User;
use App\Models\Backend\Productimage;

use Illuminate\Database\Eloquent\softDeletes;


class Product extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='products';
    protected $fillable = ['categories_id','subcategories_id','title','slug','specification','price','discount','quantity','stock','flash_key','hot_key','description','status','rank','image','meta_title','meta_keyword','meta_description','created_by','updated_by'];
    protected $filltable = ['categories_id','title','slug','status','rank','image','meta_title','meta_keyword','meta_description','created_by','updated_by'];

    function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
    function category()
    {
        return $this->belongsTo(Category::class,'categories_id','id');

    }
    function subcategory()
    {
        return $this->belongsTo(Subcategory::class,'subcategories_id','id');

    }
    function tags()
    {
        return $this->belongsToMany(Tag::class);
    }
    function productImages()
    {
        return $this->hasMany(Productimage::class,'product_id','id');
    }
    function productOptions()
    {
        return $this->hasMany(OptionProduct::class,'product_id','id');
    }
}
