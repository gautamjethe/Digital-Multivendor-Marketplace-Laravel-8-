<x-header />
<!-- Main -->
<main>
        <!-- Section -->
        <section class="section bg-cover bg-dark">
            <div class="container">
                <div class="row justify-content-center">
                    <div class="col-lg-7 col-xl-6 text-center">
                        <h1 class="mb-3 text-white mb-4">10,000 Bootstrap Templates & Themes From $10</h1>
                        <p class="lead text-white-65 mb-5">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                        <form class="d-flex flex-row mb-2 p-1 bg-white shadow-lg input-group rounded-3">
                            <input type="text" class="form-control form-control-lg rounded-0 border-0 shadow-none" placeholder="Search items, collections, and creators">
                            <button class="btn btn-primary rounded-3 flex-shrink-0 shadow-none border-0" type="submit"><i class="bi bi-search"></i></button>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End Section -->
        <section class="section bg-gray-100">
            <div class="container">
                <div class="row mb-5 align-items-center">
                    <div class="col">
                        <h5 class="mb-0">Latest Products</h5>
                        <div>Handpicked products from the last 30 days</div>
                    </div>
                    <div class="col text-end">
                        <a class="btm btn-sm btn-primary" href="#">View all</a>
                    </div>
                </div>
                <!-- Products -->
                @foreach($products as $product)
                <div class="row g-3 g-xl-4">
                    <div class="col-md-6 col-lg-4">
                        <div class="card shadow-hover">
                            <a href="item/{{$product['id']}}">
                                <img class="card-img-top" src="http://localhost:8000/uploads/{{$product['image_name']}}" title="" alt="">
                            </a>
                            <div class="card-body p-3">
                                <h5 class="m-0"><a class="text-reset text-truncate d-block w-100 h-150" href="item/{{$product['id']}}">{{$product['product_name']}}</a></h5>
                                <span class="small">PHP Scripts</span>
                                <div class="font-w-600 text-dark fs-5">
                                    FREE
                                </div>
                            </div>
                            <div class="card-footer border-top d-flex px-3">
                                <div>
                                    <span>{{$product['downloads']}} Downloads</span>
                                    <div class="text-warning small">
                                        <i class="bi bi-star-fill small"></i>
                                        <i class="bi bi-star-fill small"></i>
                                        <i class="bi bi-star-fill small"></i>
                                        <i class="bi bi-star-fill small"></i>
                                        <i class="bi bi-star-fill small"></i>
                                        <span class="text-body small">(4k)</span>
                                    </div>
                                </div>
                                <div class="ms-auto position-relative z-index-1">
                                    <a class="btn btn-outline-primary btn-sm me-2" href="{{$product['live_preview']}}" target="_blank">Preview</a>
                                    <a class="btn btn-primary btn-sm px-3" href="#"><i class="bi bi-cart fs-5 lh-1"></i></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>        
@endforeach


<x-footer />