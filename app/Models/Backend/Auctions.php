<?php

namespace App\Models\Backend;

use App\Models\User;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Auctions extends Model
{
    use HasFactory;
    use softDeletes;
    protected $table='auctions';
    protected $fillable = ['id','title','status','vehicle_id','start_date','start_time','end_date','end_time','base_price','slug','created_by','updated_by','deleted_at','created_at','updated_at'];
    protected $filltable = ['id','title','status','vehicle_id','start_date','start_time','end_date','end_time','base_price','slug','created_by','updated_by','deleted_at','created_at','updated_at'];

    function createdBy()
    {
        return $this->belongsTo(User::class,'created_by','id');
    }
    function updatedBy()
    {
        return $this->belongsTo(User::class,'updated_by','id');
    }

    function vehicleID()
    {
        return $this->belongsTo(vehicles::class,'vehicle_id','id');

    }

}
