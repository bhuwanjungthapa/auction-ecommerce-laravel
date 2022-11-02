<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='auctions';
    protected $fillable = ['id','vehicle_type_id','brand_id','title','slug','specification','stock','quantity','meta_title','meta_keyword','meta_description','description','status','created_by','updated_by','deleted_at','created_at','updated_at'];
    protected $filltable = ['id','vehicle_type_id','brand_id','title','slug','specification','stock','quantity','meta_title','meta_keyword','meta_description','description','status','created_by','updated_by','deleted_at','created_at','updated_at'];
}
