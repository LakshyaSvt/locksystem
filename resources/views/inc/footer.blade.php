<footer class="footer-section">
    <!--footer top start-->
    <div class="footer-top primary-bg">
        <div class="container">
            <div class="row justify-content-around">
                <div class="col-lg-4 mb-3 mb-lg-0">
                    <div class="footer-nav-wrap text-white">
                        <img
                            src="{{ config('app.url') }}/img/logo_2.png"
                            alt="footer logo"
                            width="120"
                            class="img-fluid mb-3"
                        />
                        <p>
                            Unlock convenience with Mars Smart
                            Doorlocks. Say goodbye to the hassles of
                            carrying house keys and get a Mars Smart
                            Doorlock today.
                        </p>

                        <div class="social-list-wrap">
                            <ul
                                class="social-list list-inline list-unstyled"
                            >
                                <li class="list-inline-item">
                                    <a
                                        href="#"
                                        target="_blank"
                                        title="Facebook"
                                        ><span
                                            class="ti-facebook"
                                        ></span
                                    ></a>
                                </li>
                                <li class="list-inline-item">
                                    <a
                                        href="#"
                                        target="_blank"
                                        title="Twitter"
                                        ><span class="ti-twitter"></span
                                    ></a>
                                </li>
                                <li class="list-inline-item">
                                    <a
                                        href="#"
                                        target="_blank"
                                        title="Instagram"
                                        ><span
                                            class="ti-instagram"
                                        ></span
                                    ></a>
                                </li>
                                <li class="list-inline-item">
                                    <a
                                        href="#"
                                        target="_blank"
                                        title="printerst"
                                        ><span
                                            class="ti-pinterest"
                                        ></span
                                    ></a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 ml-auto mb-4 mb-lg-0">
                    <div class="footer-nav-wrap text-white">
                        <h5 class="mb-3 text-white">Others Links</h5>
                        <ul class="list-unstyled">
                            <li class="mb-2">
                                <a href="/"> Home </a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('products') }}">Products</a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('about') }}">About Mars</a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('service') }}">Service Request</a>
                            </li>
                            <li class="mb-2">
                                <a href="{{ route('product') }}">Buy Now</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-3">
                    <div class="footer-nav-wrap text-white">
                        <h5 class="mb-3 text-white">Location</h5>
                        <img
                            src="{{ config('app.url') }}/img/map.png"
                            alt="location map"
                            class="img-fluid"
                        />
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!--footer top end-->

    <!--footer copyright start-->
    <div
        class="footer-bottom gray-liht-bg pt-4 pb-4"
        style="background: #000"
    >
        <div class="container">
            <div class="row text-center justify-content-center">
                <div class="col-md-6 col-lg-5">
                    <p class="copyright-text pb-0 mb-0">
                        Copyrights © 2023. All rights reserved by
                        <a href="#">marssmartlife</a>
                    </p>
                </div>
            </div>
        </div>
    </div>
    <!--footer copyright end-->
</footer>
