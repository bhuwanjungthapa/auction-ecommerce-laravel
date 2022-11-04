<?php

namespace App\Models\Backend;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class VehicleImage extends Model
{
    use HasFactory;

    protected $table='vehicle_images';
    protected $fillable=['vehicle_id','title','name'];
    protected $filltable=['vehicle_id','title','name'];
}
