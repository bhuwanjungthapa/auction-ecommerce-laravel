<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\models\Backend\Brand;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        $data['brands']=Brand::where('status',1)->get();
        return view('frontend.home', compact('data'));
    }
}
