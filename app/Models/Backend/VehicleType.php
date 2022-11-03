<?php

namespace App\Models\Backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class VehicleType extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='vehicles_type';
    protected $fillable = ['title','slug','rank','image','meta_title','meta_keyword','meta_description','status','created_by','updated_by'];
    protected $filltable = ['title','slug','rank','image','meta_title','meta_keyword','meta_description','status','created_by','updated_by'];
     function createdBy()
     {
         return $this->belongsTo(User::class,'created_by','id');
     }
     function updatedBy()
     {
        return $this->belongsTo(User::class,'updated_by','id');
 }

}
