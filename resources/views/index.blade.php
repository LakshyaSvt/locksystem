@extends('layouts.master', ['title' => 'Mars SmartLife &#8211; Design For Convenience. Build For You'])
@section('content')
    <!--body content wrap start-->
    <div class="main">
        <!--hero section start-->
        <section class="hero-section ptb-100 background-img"
            style="
                    background: url('{{ config('app.url') }}/img/modern-living-room-decor-1366x768.webp')
                        no-repeat bottom center / cover;
                ">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md-12 col-lg-6">
                        <div class="hero-content-left text-white mt-5">
                            <h1 class="text-white">
                                Live in the <span>Future</span>
                            </h1>
                            <p class="lead">
                                Unlock a New World of Convenience
                            </p>
                            <!--core feature list 2 start-->
                            <ul class="core-feature-list-2">
                                <li>
                                    <h4 class="color-secondary mb-0">
                                        Easy Access
                                    </h4>
                                    <p class="mb-1">
                                        Access by Wifi, password,
                                        fingerprint, RFIDcard...
                                    </p>
                                </li>
                                <li>
                                    <h4 class="color-secondary mb-0">
                                        Biometric
                                    </h4>
                                    <p class="mb-1">
                                        One-Touch-Access Biometric
                                        Fingerprint sensor on the reader
                                    </p>
                                </li>
                                <li>
                                    <h4 class="color-secondary mb-0">
                                        Back-up
                                    </h4>
                                    <p class="mb-1">
                                        Back-up USB external power supply
                                        interface, in case the power is dead
                                    </p>
                                </li>
                                <li>
                                    <h4 class="color-secondary mb-0">
                                        Unique style
                                    </h4>
                                    <p class="mb-1">
                                        Uniquely stylish thin panel, it can
                                        fit most wooden doors
                                    </p>
                                </li>
                            </ul>
                            <!--core feature list 2 end-->
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-5">
                        <div class="hero-animation-img d-none d-md-none d-lg-block">
                            <img src="img/lock-removebg-preview.png" alt="img" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--hero section end-->

        <!--promo section start-->
        <section class="promo-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>
                                Core features for <span>Smart</span> Home
                            </h2>
                            <p class="lead">
                                Experience a Smart Home at Zero Risk.
                            </p>
                        </div>
                    </div>
                </div>

                <div class="row">
                    <div class="col-lg-3 col-sm-6 mb-2">
                        <div class="card single-promo-card single-promo-hover mt-sm-0 mt-md-4 mt-lg-0">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="ti-thumb-up icon-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Access</h5>
                                    <p class="text-muted mb-0">
                                        Access by Wifi , password,
                                        fingerprint, RFIDcard, mechanical
                                        key.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2">
                        <div class="card single-promo-card single-promo-hover mt-sm-0 mt-md-4 mt-lg-0">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="ti-mobile icon-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Smart Life App</h5>
                                    <p class="text-muted mb-0">
                                        Smart Life provides extraordinary
                                        experience with your smart home
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2">
                        <div class="card single-promo-card single-promo-hover mt-sm-0 mt-md-4 mt-lg-0">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="ti-mouse icon-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Compatible</h5>
                                    <p class="text-muted mb-0">
                                        Compatible with various mortise to
                                        fit 99% of doors.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2">
                        <div class="card single-promo-card single-promo-hover mt-sm-0 mt-md-4 mt-lg-0">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="ti-shine icon-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Unique style</h5>
                                    <p class="text-muted mb-0">
                                        Uniquely stylish thin panel, it can
                                        fit most wooden doors.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2">
                        <div class="card single-promo-card single-promo-hover mt-sm-0 mt-md-4 mt-lg-0">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="ti-info-alt icon-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>One-Touch-Access</h5>
                                    <p class="text-muted mb-0">
                                        One-Touch-Access Biometric
                                        Fingerprint sensor on the reader
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2">
                        <div class="card single-promo-card single-promo-hover mt-sm-0 mt-md-4 mt-lg-0">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="ti-lock icon-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Strong & Secure</h5>
                                    <p class="text-muted mb-0">
                                        Strong and secure Aluminum alloy
                                        lock panel, anti-corrosion and
                                        sturdy.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2">
                        <div class="card single-promo-card single-promo-hover mt-sm-0 mt-md-4 mt-lg-0">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="ti-shield icon-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Back-up</h5>
                                    <p class="text-muted mb-0">
                                        Back-up USB external power supply
                                        interface, in case the power is
                                        dead.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 mb-2">
                        <div class="card single-promo-card single-promo-hover mt-sm-0 mt-md-4 mt-lg-0">
                            <div class="card-body">
                                <div class="pb-2">
                                    <span class="ti-hand-stop icon-md color-secondary"></span>
                                </div>
                                <div class="pt-2 pb-3">
                                    <h5>Waterproof</h5>
                                    <p class="text-muted mb-0">
                                        Upgraded structure with waterproof
                                        rubber, which could be use for the
                                        outsidegate
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--promo section end-->

        <!--sports mode section start -->
        <section class="imageblock-section switchable switchable-content gray-light-bg">
            <div class="imageblock-section-img col-lg-5 col-md-4">
                <div class="background-image-holder"
                    style="
                            background: url('img/9.jpg') no-repeat center center /
                                cover;
                            opacity: 1;
                        ">
                </div>
            </div>
            <div class="container">
                <div class="row">
                    <div class="col-lg-7 col-md-7">
                        <!--sports modes start-->
                        <div class="row align-items-center ptb-100">
                            <div class="col-lg-12 section-heading mb-2">
                                <h2>Support <span>10</span> Languages</h2>
                            </div>
                            <div class="col-lg-12">
                                <ul class="list-inline sports-mode-list">
                                    <li class="list-inline-item border rounded-circle mt-4 mr-4 white-bg">
                                        <img alt="Image placeholder" src="img/Flag-China.webp"
                                            class="img-center img-fluid" />
                                        <p></p>
                                    </li>
                                    <li class="list-inline-item border rounded-circle mt-4 mr-4 white-bg">
                                        <img alt="Image placeholder" src="img/istockphoto-854115776-170667a.webp"
                                            class="img-center img-fluid" />
                                    </li>
                                    <li class="list-inline-item border rounded-circle mt-4 mr-4 white-bg">
                                        <img alt="Image placeholder" src="img/Flag-Vietnam.webp"
                                            class="img-center img-fluid" />
                                    </li>
                                    <li class="list-inline-item border rounded-circle mt-4 mr-4 white-bg">
                                        <img alt="Image placeholder"
                                            src="img/spain-flag-flag-spain-vector-illustration_685751-103.avif"
                                            class="img-center img-fluid" />
                                    </li>
                                    <li class="list-inline-item border rounded-circle mt-4 mr-4 white-bg">
                                        <img alt="Image placeholder" src="img/Flag_of_Portugal.svg.webp"
                                            class="img-center img-fluid" />
                                    </li>
                                    <li class="list-inline-item border rounded-circle mt-4 mr-4 white-bg">
                                        <img alt="Image placeholder" src="img/Flag-Thailand.webp"
                                            class="img-center img-fluid" />
                                    </li>
                                    <li class="list-inline-item border rounded-circle mt-4 mr-4 white-bg">
                                        <img alt="Image placeholder" src="img/Flag_of_India.svg.webp"
                                            class="img-center img-fluid" />
                                    </li>
                                    <li class="list-inline-item border rounded-circle mt-4 mr-4 white-bg">
                                        <img alt="Image placeholder" src="img/Flag-Indonesia.webp"
                                            class="img-center img-fluid" />
                                    </li>
                                    <li class="list-inline-item border rounded-circle mt-4 mr-4 white-bg">
                                        <img alt="Image placeholder" src="img/Flag_of_Russia.svg.png"
                                            class="img-center img-fluid" />
                                    </li>
                                    <li class="list-inline-item border rounded-circle mt-4 mr-4 white-bg">
                                        <img alt="Image placeholder" src="img/Flag_of_Bangladesh.svg.png"
                                            class="img-center img-fluid" />
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!--sports modes end-->
                    </div>
                </div>
                <!--end of row-->
            </div>
        </section>
        <!--sports mode section end-->

        <!--features section start-->
        <div id="features" class="feature-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-5">
                            <h2>
                                More <span>Capabilities</span> Less
                                <span>Compromise</span>
                            </h2>
                        </div>
                    </div>
                </div>
                <!--feature new style start-->
                <div class="row row-grid align-items-center">
                    <div class="col-lg-4">
                        <div class="position-relative py-sm-5 py-md-0 py-lg-0">
                            <img alt="Image placeholder" src="img/Screenshot 2023-09-12 124539.png"
                                class="img-center img-fluid" />
                        </div>
                    </div>

                    <div class="col-lg-4">
                        <div class="d-flex align-items-start mb-5">
                            <div class="single-feature-icon rounded-circle white-bg p-3 mr-4">
                                <span class="flaticon-hand-finger-pressing-a-circular-ring-button color-secondary"></span>
                            </div>
                            <div class="icon-text">
                                <h5>Fingerprint Identification</h5>
                                <p class="mb-0">
                                    Avoid unlocking fake Fingerprint film
                                    and Quickly/Efectively Identify Correct
                                    Fingerprints with low power consumption
                                    and high accuracy
                                </p>
                            </div>
                        </div>

                        <div class="d-flex align-items-start">
                            <div class="single-feature-icon rounded-circle white-bg p-3 mr-4">
                                <span class="flaticon-bell color-secondary"></span>
                            </div>
                            <div class="icon-text">
                                <h5>Anti-peeping virtual password</h5>
                                <p class="mb-0">
                                    Enter any number before and after
                                    "correct password", and enter the
                                    password continuosly and correctly in
                                    the middle to unlock the lock
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4">
                        <div class="position-relative py-sm-5 py-md-0 py-lg-0">
                            <img alt="Image placeholder" src="img/Screenshot 2023-09-12 124514.png"
                                class="img-center img-fluid" />
                        </div>
                    </div>
                </div>
                <!--feature new style end-->
            </div>
        </div>
        <!--features section end-->

        <section id="download" class="video-promo ptb-100 background-img"
            style="
                    background: url('img/Smart-Life-App-Changing-Wifi-1024x519.webp')
                        no-repeat center center / cover;
                ">
            <div class="container">
                <div class="row">
                    <div class="col-md-6">
                        <div class="highlight-text w-75 m-auto text-center text-white">
                            <img src="img/logo@1x.png" class="img-fluid p-4" alt="SMART LIFE" />
                            <h5 class="mb-2 h2 text-white">SMART LIFE</h5>
                            <div class="px-4">
                                <h5 class="mb-2 text-white">
                                    BUILD SMART HOME WITH SMART LIFE
                                </h5>

                                <a href="#" class="btn secondary-btn mt-3">
                                    Book Now</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--our video promo section end-->

        <section id="product" class="ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center mb-4">
                            <h2>Product <span>Variants</span></h2>
                        </div>
                    </div>
                </div>
                <!--start product carousel-->
                <div class="product-wrap pt-4">
                    <div class="row justify-content-center">
                        @foreach ($products as $product)
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
        <section id="specs" class="technical-space ptb-100" style="background: #e1e5e8">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-lg-6">
                        <div class="img-wrap">
                            <img src="{{ config('app.url') }}/img/Screenshot122254pp.jpg" alt="Mars"
                                class="img-fluid" />
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="section-heading">
                            <h2><span>Technical</span> Specs</h2>
                        </div>
                        <div
                            style="
                                    border: 1px solid #eff2f7;
                                    border-radius: 1rem;
                                    height: 100%;
                                    transition: all 0.2s ease;
                                    background: #fff;
                                    box-shadow: 0 3px 20px 0 rgba(0, 0, 0, 0.12);
                                    padding: 4px;
                                ">
                            <img src="{{ config('app.url') }}/img/WhatsApp Image 2023-09-16 at 12.52.13.jpg"
                                alt="Mars" class="img-fluid" />
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!--technical space end-->

        <!--products section start-->

        <!--testimonial section start-->
        <section class="testimonial-section ptb-100">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-6">
                        <div class="section-heading text-center mb-3">
                            <h2>Testimonial</h2>
                            <p>Hear what our customers say</p>
                        </div>
                    </div>
                    <div class="col-md-8">
                        <div class="owl-carousel owl-theme client-testimonial arrow-indicator">
                            <div class="item">
                                <div class="testimonial-quote-wrap text-center">
                                    <div class="client-say">
                                        <p class="lead">
                                            <img src="{{ config('app.url') }}/img/quote.png" alt="quote"
                                                class="img-fluid" />
                                            Interactively optimize fully
                                            researched expertise vis-a-vis
                                            plug-and-play relationships.
                                            Intrinsicly develop viral core
                                            competencies for fully tested
                                            customer service.
                                            Enthusiastically create
                                            next-generation growth
                                            strategies and.
                                        </p>
                                    </div>
                                    <div class="author-info py-3">
                                        <img src="{{ config('app.url') }}/img/client-1.jpg" alt="client"
                                            class="img-fluid rounded-circle" />
                                        <h5 class="mb-0">John Charles</h5>
                                        <span>AppCo</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-quote-wrap text-center">
                                    <div class="client-say">
                                        <p class="lead">
                                            <img src="{{ config('app.url') }}/img/quote.png" alt="quote"
                                                class="img-fluid" />
                                            Rapidiously develop user
                                            friendly growth strategies after
                                            extensive initiatives.
                                            Conveniently grow innovative
                                            benefits through fully tested
                                            deliverables. Rapidiously
                                            utilize focused platforms
                                            through end-to-end schemas.
                                        </p>
                                    </div>
                                    <div class="author-info py-3">
                                        <img src="{{ config('app.url') }}/img/client-2.jpg" alt="client"
                                            class="img-fluid rounded-circle" />
                                        <h5 class="mb-0">Arabella Ora</h5>
                                        <span>BizBite</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-quote-wrap text-center">
                                    <div class="client-say">
                                        <p class="lead">
                                            <img src="{{ config('app.url') }}/img/quote.png" alt="quote"
                                                class="img-fluid" />
                                            Objectively synthesize
                                            client-centered e-tailers for
                                            maintainable channels.
                                            Holisticly administrate customer
                                            directed vortals whereas
                                            tactical functionalities.
                                            Energistically monetize reliable
                                            imperatives through
                                            client-centric best practices.
                                            Collaboratively.
                                        </p>
                                    </div>
                                    <div class="author-info py-3">
                                        <img src="{{ config('app.url') }}/img/client-3.jpg" alt="client"
                                            class="img-fluid rounded-circle" />
                                        <h5 class="mb-0">Jeremy Jere</h5>
                                        <span>Themetags</span>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="testimonial-quote-wrap text-center">
                                    <div class="client-say">
                                        <p class="lead">
                                            <img src="{{ config('app.url') }}/img/quote.png" alt="quote"
                                                class="img-fluid" />
                                            Enthusiastically innovate B2C
                                            data without clicks-and-mortar
                                            convergence. Monotonectally
                                            deliver compelling testing
                                            procedures vis-a-vis B2B testing
                                            procedures. Competently
                                            evisculate integrated resources
                                            whereas global processes.
                                            Enthusiastically.
                                        </p>
                                    </div>
                                    <div class="author-info py-3">
                                        <img src="{{ config('app.url') }}/img/client-4.jpg" alt="client"
                                            class="img-fluid rounded-circle" />
                                        <h5 class="mb-0">John Charles</h5>
                                        <span>AppCo</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--testimonial section end-->

        <!--download section start-->
        <section class="download-section ptb-100 background-img"
            style="
                    background: url('{{ config('app.url') }}/img/apple-watch.jpg') no-repeat center
                        center / cover;
                ">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-md-8">
                        <div class="section-heading text-center">
                            <h2 class="mb-4" style="color: #fff">
                                Experience a Smart Home at
                                <span>Zero</span> Risk
                            </h2>
                            <a href="{{ route('product') }}" class="btn secondary-btn mt-3">
                                Book Now</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--download section end-->

        <!--subscribe section start-->
    </div>
    <!--body content wrap end-->
@endsection
