<?php

namespace App\Models\Backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Vehicle extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='vehicles';
    protected $fillable = ['id','vehicle_type_id','brand_id','title','slug','specification','stock','quantity','price','meta_title','meta_keyword','meta_description','description','status','created_by','updated_by','deleted_at','created_at','updated_at'];
    protected $filltable = ['id','vehicle_type_id','brand_id','title','slug','specification','stock','quantity','price','meta_title','meta_keyword','meta_description','description','status','created_by','updated_by','deleted_at','created_at','updated_at'];
    function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }
    function vehicles_type()
    {
        return $this->belongsTo(VehicleType::class,'vehicles_type_id','id');

    }
    function brandId()
    {
        return $this->belongsTo(Brand::class,'brand_id','id');

    }
}
