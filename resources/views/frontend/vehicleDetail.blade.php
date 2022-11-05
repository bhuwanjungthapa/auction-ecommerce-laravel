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

                @php
                    $images = $data['vehicles']->vehicleImages()->get();
                @endphp
                <div class="single-product-img" style="float: right">
                    @foreach($images as $image)
                        <div data-slider-id="1">
                            <img src="{{asset('images/vehicles/'. $image->name)}}" alt="car">
                        </div>
                    @endforeach
                </div>
            </div>

            <form action="{{route('frontend.cart.add')}}" method="post">
                @csrf
                <input type="hidden" name="vehicle_id" value="{{$data['vehicles']->id}}">
                <input type="hidden" name="title" value="{{$data['vehicles']->title}}">
                <input type="hidden" name="price" value="{{$data['vehicles']->price}}">
                <input type="hidden" name="slug" value="{{$data['vehicles']->slug}}">
                <input type="hidden" name="quantity" value="{{$data['vehicles']->quantity}}">
                <input type="hidden" name="weight " value="1">

            <div class="col-md-7">
                <div class="single-product-content">
                     <h3>{{$data['vehicles']->title}}</h3>
                     <p class="single-product-pricing">Rs.{{$data['vehicles']->price}}</p>
                     <p>{{$data['vehicles']->description}}</p>
                     <h6>In Stock:{{$data['vehicles']->stock}}</h6>

                    <select name="qty" id="qty">
                        <option value="">Select Quantity</option>
                        @for($i=1;$i<=$data['vehicles']->stock;$i++)
                            <option value="{{$i}}">{{$i}}</option>
                        @endfor
                    </select>
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

