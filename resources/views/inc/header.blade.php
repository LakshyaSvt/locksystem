<!--header section start-->
<header class="header">
    <!--start navbar-->
    <nav id="nav" class="navbar navbar-expand-lg ">
        <div class="container">
            <a class="navbar-brand" href="/"><img src="img/logo_2.png" width="120" alt="logo"
                                                           class="img-fluid"></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                    aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="ti-menu"></span>
            </button>

            <div class="collapse navbar-collapse main-menu" id="navbarSupportedContent">
                <ul class="navbar-nav ml-auto">
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="/">
                            Home
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('products') }}">Products</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('about') }}">About Mars</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link page-scroll" href="{{ route('service') }}">Service Request</a>
                    </li>
                    <li class="nav-item">
                        <a class="book-btn nav-link page-scroll" href="{{ route('product') }}">Buy Now</a>
                    </li>

                </ul>
            </div>
        </div>
    </nav>
    <!--end navbar-->
</header>
<!--header section end-->
