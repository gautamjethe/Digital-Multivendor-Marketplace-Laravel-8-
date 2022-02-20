<x-header />

<main>
        <!-- Breadcrumb -->
        <div class="py-3 bg-gray-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-2">
                        <h1 class="m-0 h4 text-center text-lg-start">Blog</h1>
                    </div>
                    <div class="col-lg-6 my-2">
                        <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="#"><i class="bi bi-home"></i>Home</a></li>
                            <li class="breadcrumb-item text-nowrap active" aria-current="page">Blog</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->
        <!-- blog -->
        <div class="py-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 my-3">
                        @foreach($dd as $ddu)
                        <div class="row g-4">
                            <div class="col-sm-6">
                                <div class="card">
                                    <a href="{{env('APP_URL')}}/blogs/{{$ddu['id']}}">
                                        <img class="card-img-top" src="{{env('APP_URL')}}/uploads/{{$ddu['image']}}" title="" alt="">
                                    </a>
                                    <div class="card-body">
                                        <div class="text-muted mb-3"><i class="bi bi-clock me-2"></i>{{ \Carbon\Carbon::parse($ddu->created_at)->format('M d, Y')}}</div>
                                        <a class="h5" href="#">{{$ddu['title']}}</a>
                                        
                                        <a class="ms-auto font-w-600 link-effect" href="{{env('APP_URL')}}/blogs/{{$ddu['id']}}">Read More</a>
                                    </div>
                                </div>
                            </div>                        
                                                    
                            
                            
                        </div>
                        @endforeach
                        <ul class="pagination justify-content-center mt-6">
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Previous">
                                    <span aria-hidden="true">«</span>
                                </a>
                            </li>
                            <li class="page-item"><a class="page-link" href="#">1</a></li>
                            <li class="page-item active"><a class="page-link" href="#">2</a></li>
                            <li class="page-item"><a class="page-link" href="#">3</a></li>
                            <li class="page-item">
                                <a class="page-link" href="#" aria-label="Next">
                                    <span aria-hidden="true">»</span>
                                </a>
                            </li>
                        </ul>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- blog end -->
    </main>




    <x-footer />