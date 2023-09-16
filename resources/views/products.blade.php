@extends('layouts.master', ['title' => 'Mars SmartLife &#8211; Design For Convenience. Build For You'])
@section('content')
    <!--body content wrap start-->
    <div class="main">
        <section id="product" class="contact-us-section gray-light-bg ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-4">
                            <h2>Product <span>Variants</span> </h2>

                        </div>
                    </div>
                </div>
                <!--start product carousel-->
                <div class="product-wrap pt-4">
                    <div class="row justify-content-center">
                        @foreach (App\Models\Product::get() as $product)
                            <div class="col-md-4">
                                <div class="single-product rounded shadow-sm white-bg">
                                    <img src="{{ Voyager::image($product->image) }}" class="img-fluid p-4"
                                        alt="product" />
                                    <div class="product-info text-center pb-4 px-3">
                                        <h4 class="mb-1">
                                            {{ $product->product_name }}
                                        </h4>
                                        <h5 class="product-price">
                                            <span> ₹{{ $product->price }}</span>
                                        </h5>
                                        <a href="{{ route('product') }}" class="btn secondary-btn">
                                            Book Now</a>
                                    </div>
                                </div>
                            </div>
                        @endforeach

                    </div>
                </div>
                <!--end product carousel-->
            </div>
        </section>
        <!--products section end-->
        <!--technical space start-->
    </div>
    <!--body content wrap end-->
@endsection
