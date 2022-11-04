@extends('layouts.frontend') 
@section('title','Vehicle-detail')

<!-- breadcrumb-section -->
<div class="breadcrumb-section breadcrumb-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="breadcrumb-text">
                    
                    <h1>Vehicle Detail</h1>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end breadcrumb section -->

<!-- single product -->


<div class="single-product mt-150 mb-150">    
    <div class="container">
        <div class="row">
           

            <div class="col-md-5">
                <div class="single-product-img">
                    <img src="#" alt="car">
                </div>
            </div>
            <form action="{{route('frontend.cart.add')}}" method="post">
                @csrf
                <input type="hidden" name="vehicle_id" value="{{$data['vehicles']->id}}">
                <input type="hidden" name="vehicle_slug" value="{{$data['vehicles']->slug}}">

                <input type="hidden" name="vehicle_name" value="{{$data['vehicles']->title}}">
                <input type="hidden" name="vehicle_price" value="{{$data['vehicles']->price}}">
                <input type="hidden" name="vehicle_quantity" value="{{$data['vehicles']->quantity}}">

            <div class="col-md-7">
                <div class="single-product-content">
                     <h3>{{$data['vehicles']->title}}</h3> 
                     <p class="single-product-pricing">Rs.{{$data['vehicles']->price}}</p> 
                     <p>{{$data['vehicles']->description}}</p> 
                     <h6>In Stock:{{$data['vehicles']->stock}}</h6>

                     <form action="index.html">
                        <input type="number" maxlength={{$data['vehicles']->stock}} placeholder="0">
                    </form>
                    <div class="single-product-form">
                        
                        <button type="submit" class="cart-btn"><i class="fas fa-shopping-cart"></i></button>
                    
                    </div>
                    
                </div>
            </div>
        </form>
        </div>
    </div>
    
</div>

<!-- end single product -->

