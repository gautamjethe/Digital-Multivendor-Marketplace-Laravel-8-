<x-header />

<main>
        <!-- Breadcrumb -->
        <div class="py-3 bg-gray-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-2">
                        <h1 class="m-0 h4 text-center text-lg-start">Download</h1>
                    </div>
                    <div class="col-lg-6 my-2">
                        <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="#"><i class="bi bi-home"></i>Home</a></li>
                            <li class="breadcrumb-item text-nowrap active" aria-current="page">Download</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->
        <section class="py-6">
            <div class="container">
                <div class="pb-5">
                    <h2 class="m-0">Your download</h2>
                </div>
                <div class="row g-4">
                    <div class="col-lg-6">
                        <div class="card download-card">
                            <div class="card-body p-3">
                                <div class="d-flex">
                                    <div class="avatar border rounded">
                                        <a href="#" class="d-block h-100">
                                            <img src="http://localhost:8000/uploads/{{$download['image_name']}}" title="" alt="">
                                        </a>
                                    </div>
                                    <div class="col ps-3">
                                      
                                       
                                        <h6><a class="text-reset" href="/item/{{$download['id']}}">{{$download['product_name']}}</a></h6>
                                        
                                        <span>Last Downloaded :  {{$download['updated_at']}}</span>
                                       
                                    </div>
                                </div>
                            </div>
                            <div class="card-footer d-flex px-3 py-2 align-items-center">
                                <div>Single License</div>
                                <div class="ms-auto">
                                <form action="" method="POST">
                                    @csrf    
                                  <a href="http://localhost:8000/uploads/{{$download['mainfile_name']}}"><button class="btn btn-sm btn-primary">Download</button></a>
                                  </form>    
                                </div>
                            </div>
                        </div>
                    </div>
                    
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>





<x-footer />