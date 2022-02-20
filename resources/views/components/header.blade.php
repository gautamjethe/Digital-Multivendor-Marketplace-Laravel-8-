<html lang="zxx">

<head>
    <!-- Title -->
    <title>Fusion - Digital Marketplace Template</title>
    <!-- Required Meta Tags Always Come First -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <!-- Favicon -->
    <link rel="shortcut icon" href="favicon.ico">
    <!-- CSS Template -->
    <link href="/style.css" rel="stylesheet">
    <link href="fuse/bootstrapicons.css" rel="stylesheet">
    <link href="fuse/fontawesome.css" rel="stylesheet">
    <link href="fuse/magnific.css" rel="stylesheet">
    <link href="fuse/owl.css" rel="stylesheet">
</head>

<body>
    <!-- Skippy -->
    <a id="skippy" class="sr-only sr-only-focusable u-skippy" href="#content">
        <div class="container">
            <span class="u-skiplink-text">Skip to main content</span>
        </div>
    </a>
    <!-- End Skippy -->
    <!-- Preload -->
    <div id="loading" class="preloader">
        <div class="spinner-border text-primary" role="status"></div>
    </div>
    <!-- End Preload -->
    <!-- Mini Cart -->
    <div class="modal px-modal-right fade" id="modalMiniCart" tabindex="-1" role="dialog" aria-hidden="true">
        <!-- Shopping Cart -->
        <div class="modal-dialog px-modal-vertical">
            <div class="modal-content">
                <!-- Header-->
                <div class="modal-header border-bottom">
                    <h6 class="m-0 fw-bold">
                        Your Cart (2)
                    </h6>
                    <!-- Close -->
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">
                    </button>
                </div>
                <div class="modal-body">
                    <!-- List group -->
                    <ul class="list-unstyled m-0 p-0">
                        <li class="py-3 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Image -->
                                    <a href="#">
                                        <img class="img-fluid border" src="http://pxdraft.com/wrap/fusion/static/img/product-1.png" alt="...">
                                    </a>
                                </div>
                                <div class="col-8">
                                    <!-- Title -->
                                    <p class="mb-2">
                                        <a class="text-dark fw-500" href="#">Cotton floral print Dress</a>
                                        <span class="m-0 text-muted w-100 d-block">$40.00</span>
                                        <a class="small link-danger ms-auto" href="#!">
                                            <i class="bi bi-x"></i> Remove
                                        </a>
                                    </p>
                                    <!--Footer -->
                                    <div class="d-flex align-items-center">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li class="py-3 border-bottom">
                            <div class="row align-items-center">
                                <div class="col-4">
                                    <!-- Image -->
                                    <a href="#">
                                        <img class="img-fluid border" src="http://pxdraft.com/wrap/fusion/static/img/product-2.png" alt="...">
                                    </a>
                                </div>
                                <div class="col-8">
                                    <!-- Title -->
                                    <p class="mb-2">
                                        <a class="text-dark fw-500" href="#">Cotton floral print Dress</a>
                                        <span class="m-0 text-muted w-100 d-block">$40.00</span>
                                        <a class="small link-danger ms-auto" href="#!">
                                            <i class="bi bi-x"></i> Remove
                                        </a>
                                    </p>
                                    <!--Footer -->
                                    <div class="d-flex align-items-center">
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <!-- Footer -->
                <div class="mt-auto p-3 pt-0">
                    <div class="row g-0 py-2">
                        <div class="col-8">
                            <span class="text-dark">Subtotal</span>
                        </div>
                        <div class="col-4 text-end">
                            <span class="ml-auto">$89.00</span>
                        </div>
                    </div>
                    <div class="row g-0 py-2">
                        <div class="col-8">
                            <span class="text-dark">Taxes:</span>
                        </div>
                        <div class="col-4 text-end">
                            <span class="ml-auto">$89.00</span>
                        </div>
                    </div>
                    <div class="row g-0 pt-2 mt-2 border-top fw-bold text-dark">
                        <div class="col-8">
                            <span class="text-dark">Subtotal</span>
                        </div>
                        <div class="col-4 text-end">
                            <span class="ml-auto">$89.00</span>
                        </div>
                    </div>
                    <div class="pt-4">
                        <a class="btn btn-block btn-dark w-100 mb-3" href="checkout.html">Continue to Checkout</a>
                        <a class="btn btn-block btn-outline-dark w-100" href="cart.html">View Cart</a>
                    </div>
                </div>
                <!-- Buttons -->
            </div>
        </div>
    </div>
    <!-- End Mini Cart -->
    <!-- Header -->
    <header class="header-main header-light shadow-sm position-relative z-index-4">
        <nav class="navbar navbar-expand-lg navbar-light">
            <div class="container">
                <!-- Logo -->
                <a class="navbar-brand" href="/">
                    <img src="http://pxdraft.com/wrap/fusion/static/img/logo.svg" title="" alt="">
                </a>
                <!-- Logo -->
                <!-- Menu -->
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav me-auto ps-lg-8">
                        <li class="nav-item">
                            <a href="{{env('APP_URL')}}" class="nav-link">Home</a>
                        </li>
                        <li class="nav-item">
                            <a href="/" class="nav-link">Products</a>
                        </li>
                        <li class="nav-item">
                            <a href="{{env('APP_URL')}}/blogs" class="nav-link">Blogs</a>
                        </li>
                        
                    </ul>
                </div>
                <!-- End Menu -->
                <div class="nav flex-nowrap align-items-center header-right">
                    <!-- Nav Search-->
                    <div class="nav-item">
                        <a class="nav-link collapsed" data-bs-toggle="collapse" href="javascript:void(0)" data-bs-target="#search-open" aria-expanded="false">
                            <i class="bi bi-search"> </i>
                        </a>
                    </div>
                    <div class="header-search collapse" id="search-open">
                        <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" aria-label="Username" aria-describedby="basic-addon1">
                            <button class="btn btn-primary" id="basic-addon1"><i class="bi bi-search"></i></button>
                        </div>
                    </div>
                    <!-- Cart -->
                    
                    <!-- Acount -->
                    <div class="nav-item dropdown">
                        <a class="nav-link" href="#" role="button" id="dropdown_myaccount" data-bs-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            <i class="bi bi-person-circle"> </i>
                        </a>
                        <div class="dropdown-menu dropdown-menu-end mt-2 shadow" aria-labelledby="dropdown_myaccount">
                            <a class="dropdown-item" href="/login">Login</a>
                            <a class="dropdown-item" href="/register">Register</a>
                            
                        </div>
                    </div>
                    <!-- Mobile Toggle -->
                    <button class="navbar-toggler ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <!-- End Mobile Toggle -->
                </div>
            </div>
        </nav>
    </header>
    <!-- Header End -->