<?php

namespace App\Http\Controllers\frontend;

use App\Http\Controllers\Controller;
use App\models\Backend\Brand;
use App\models\Backend\Vehicle;
use App\models\Backend\VehicleType;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    function index(){
        //$data['brands']=Brand::where('status',1)->get();
        //$data['vehicles_type']=VehicleType::where('status',1)->get();
        return view('frontend.home');
    }
    function cart(){
        return view('frontend.cart');
    }
    function vehicle(){
        // $data['brands']=Brand::where('status',1)->get();
        $data['vehicles_type']=VehicleType::where('status',1)->get();
        //$data['vehicles']=Vehicle::where('slug',$slug)->first();
        $data['vehicles']=Vehicle::where('status',1)->get();
        return view('frontend.vehicle',compact('data'));
    }
    function contact(){
        return view('frontend.contact');
    }
    function checkout(){
        return view('frontend.checkout');
    }

    function vehicleDetail($slug){
        $data['vehicles']=Vehicle::where('slug',$slug)->first();
        $data['vehicles_type']=VehicleType::where('status',1)->get();
        return view('frontend.vehicleDetail',compact('data'));
    }
    function addToCart(Request $request){
        Cart::add
        ([
            'id' => $request->input('vehicle_id'),
            'name' => $request->input('name'),
            'qty' => $request->input('quantity'),
            'price' => $request->input('price'),
             ]);
             request()->session()->flash('success',"Item added to cart");
          }
}
