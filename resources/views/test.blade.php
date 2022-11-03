@section('title','MyCommerce')
@extends('layouts.frontend')


<!-- hero area -->
<div class="hero-area hero-bg">
    <div class="container">
        <div class="row">
            <div class="col-lg-9 offset-lg-2 text-center">
                <div class="hero-text">
                    <div class="hero-text-tablecell">
                        <p class="subtitle">Rebuilt and Rebfurbished</p>
                        <h1>VEHICLE OF YOUR CHOICE</h1>
                        <div class="hero-btns">
                            <a href="shop.html" class="boxed-btn">VEHICLE COLLECTION</a>
                            <a href="contact.html" class="bordered-btn">CONTACT US</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end hero area -->

<!-- features list section -->
<div class="list-section pt-80 pb-80">
    <div class="container">

        <div class="row">
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-shipping-fast"></i>
                    </div>
                    <div class="content">
                        <h3>Free Shipping</h3>
                        {{-- <p>When order over $75</p> --}}
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 mb-4 mb-lg-0">
                <div class="list-box d-flex align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-phone-volume"></i>
                    </div>
                    <div class="content">
                        <h3>24/7 Support</h3>
                        <p>Get support all day</p>
                    </div>
                </div>
            </div>
            <div class="col-lg-4 col-md-6">
                <div class="list-box d-flex justify-content-start align-items-center">
                    <div class="list-icon">
                        <i class="fas fa-sync"></i>
                    </div>
                    <div class="content">
                        <h3>Refund</h3>
                        <p>Get refund within 3 days!</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>
<!-- end features list section -->

<!-- product section -->
<div class="product-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-8 offset-lg-2 text-center">
                <div class="section-title">
                    <h3><span class="orange-text">Our</span> Vehicles</h3>
                    <p>Select the right vehicle for you that have been perfectly rebuilt</p>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="{{asset('assets/frontend/img/products/product-img-1.png')}}" alt=""></a>
                    </div>
                    <h3>Honda Grazia</h3>
                    <p class="product-price"> Rs. 1,50,000 </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="{{asset('assets/frontend/img/products/product-img-2.png')}}" alt=""></a>
                    </div>
                    <h3>Royale Enfield Clasic</h3>
                    <p class="product-price">Rs.3,20,000 </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="{{asset('assets/frontend/img/products/product-img-3.jpeg')}}" alt=""></a>
                    </div>
                    <h3>Toyota C HR</h3>
                    <p class="product-price"> Rs.25,00,000 </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="{{asset('assets/frontend/img/products/product-img-3.jpeg')}}" alt=""></a>
                    </div>
                    <h3>Toyota C HR</h3>
                    <p class="product-price"> Rs.25,00,000 </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="{{asset('assets/frontend/img/products/product-img-3.jpeg')}}" alt=""></a>
                    </div>
                    <h3>Toyota C HR</h3>
                    <p class="product-price"> Rs.25,00,000 </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
            <div class="col-lg-4 col-md-6 offset-md-3 offset-lg-0 text-center">
                <div class="single-product-item">
                    <div class="product-image">
                        <a href="single-product.html"><img src="{{asset('assets/frontend/img/products/product-img-3.jpeg')}}" alt=""></a>
                    </div>
                    <h3>Toyota C HR</h3>
                    <p class="product-price"> Rs.25,00,000 </p>
                    <a href="cart.html" class="cart-btn"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end product section -->

<!-- cart banner section -->
<section class="cart-banner pt-100 pb-100">
    <div class="container">
        <div class="row clearfix">
            <!--Image Column-->
            <div class="image-column col-lg-6">
                <div class="image">
                    <div class="price-box">
                        <div class="inner-price">
                                <span class="price">
                                    <strong>20%</strong> <br> off
                                </span>
                        </div>
                    </div>
                    <img src="{{asset('assets/frontend/img/a.jpeg')}}" alt="">
                </div>
            </div>
            <!--Content Column-->
            <div class="content-column col-lg-6">
                <h3><span class="orange-text">Deal</span> of the month</h3>
                <h4>Mahindra Scorpio S4</h4>
                <div class="text">Mahindra Scorpio jeep in 2022 starts at the price range of around Rs. 53.95 lakhs in Nepal. With our perfect rebuild of the model you can get this used and refurbished model very cheaply. Mahindra Scorpio jeep is undoubtedly one of the most popular and most selling SUV in Nepal.</div>
                <!--Countdown Timer-->
                <h4 class="orange-text">Rs. 33,00,000</h4>
                <a href="cart.html" class="cart-btn mt-3"><i class="fas fa-shopping-cart"></i> Add to Cart</a>
            </div>
        </div>
    </div>
</section>
<!-- end cart banner section -->

<!-- testimonail-section -->
<div class="testimonail-section mt-150 mb-150">
    <div class="container">
        <div class="row">
            <div class="col-lg-10 offset-lg-1 text-center">
                <div class="testimonial-sliders">
                    <div class="single-testimonial-slider">
                        <div class="client-avater">
                            <img src="{{asset('assets/frontend/img/avaters/avatar1.png')}}" alt="">
                            <
