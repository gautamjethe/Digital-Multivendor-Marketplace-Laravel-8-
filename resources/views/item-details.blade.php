<x-header />
<!-- Main -->

<main>
        <div class="py-3 bg-gray-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-2">
                        <h1 class="m-0 h4 text-center text-lg-start">Item Details</h1>
                    </div>
                    <div class="col-lg-6 my-2">
                        <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="#"><i class="bi bi-home"></i>Home</a></li>
                            <li class="breadcrumb-item text-nowrap active" aria-current="page">Shop</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>  
              
        <section class="py-6">
            <div class="container">
                <div class="mb-5">
                
                    <h2 class="font-w-500">{{$data['product_name']}}</h2>
                </div>
                <div class="row">
                    <!-- Left Penal -->
                    <div class="col-lg-8">
                        <div class="card">
                            <div class="card-body">
                                <div class="theme-feature-image mb-5">
                                    <img class="w-100" src="http://localhost:8000/uploads/{{$data['image_name']}}" title="" alt="">
                                </div>
                                <div class="theme-content-area">
                                    <ul class="nav nav-tabs nav-tabs-01" id="myTab" role="tablist">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="Description-tab" data-bs-toggle="tab" data-bs-target="#Description" type="button" role="tab" aria-controls="Description" aria-selected="true">Description</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active" id="Reviews-tab" data-bs-toggle="tab" data-bs-target="#Reviews" type="button" role="tab" aria-controls="Reviews" aria-selected="true">Comments</button>
                                        </li>
                                        
                                    </ul>
                                    <div class="tab-content" id="myTabContent">
                                        <div class="tab-pane fade show active" id="Description" role="tabpanel" aria-labelledby="Description-tab">
                                            <div class="pt-4">
                                                <p>{{$data['product_shortdes']}}</p>
                                                <br>
                                                <p>{{$data['product_longdes']}}</p>
                                                <h3 class="h4">Features</h3>
                                                <ul>
                                                <pre><code> {{$data['product_features']}} </code></pre>
                                                </ul>
                                                <h3 class="h4">What do you get?</h3>
                                                <ul>
                                                    <li>HTML Files</li>
                                                    <li>CSS Files</li>
                                                    <li>PHP Full Sourcecode</li>
                                                    <li>License File</li>
                                                </ul>
                                                <h3 class="h4">changelogs</h3>
                                                <ul>                                                
                                                
                                                   <pre><code> {{$data['changelogs']}} </code></pre>
                                                
                                                
                                                </ul>
                                                
                                            </div>
                                        </div>
                                        
                                        <div class="tab-pane fade active show" id="Reviews" role="tabpanel" aria-labelledby="Reviews-tab">
                                            <div class="py-3">
                                                <div class="row align-items-end">
                                                    <div class="col-sm-6">
                                                        <h5 class="m-0">Comments ({{$counts}})</h5>
                                                        
                                                    </div>
                                                    
                                                </div>
                                                @foreach($results as $result)
                                                <div class="d-flex border-top mt-3 pt-3">
                                                    <?php
                                                    $default = "https://www.gravatar.com/avatar/";
                                                    $size = 80;
                                                    $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $result->email ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;
                                                    ?>
                                                    <div class="review-image avatar rounded-circle">
                                                        <img class="img-fluid" src="{{$grav_url}}" title="" alt="">
                                                    </div>
                                                    <div class="col ps-3">
                                                        <h6 class="mb-0"><a href="{{env('APP_URL')}}/profile/{{$result->user_id}}">{{$result->username}}</a></h6>
                                                        <div class="text-warning small">
                                                            
                                                            <span class="text-body">{{ \Carbon\Carbon::parse($result->created_at)->format('d M Y')}}</span>
                                                        </div>
                                                        <p class="m-0 pt-2">{{$result->content}}</p>
                                                    </div>
                                                </div>
                                                @endforeach
                                                
                                                
                                                
                                                <div class="pt-4 ">
                                                    <h5 class="mb-3 pb-3 border-bottom">WRITE A COMMENT</h5>
                                                    <form action="" method="POST">
                                                        @csrf
                                                        <div class="row g-2">
                                                            
                                                           
                                                            
                                                            
                                                            <div class="col-sm-12">
                                                                
                                                                <textarea rows="7"name="content" class="form-control" required></textarea>
                                                                <input type="hidden"name="product_id" value="{{$data['id']}}">
                                                                
                                                            </div>
                                                            <div class="col-sm-12 pt-2">
                                                                <button class="btn btn-primary" type="submit">Submit</button>
                                                            </div>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>  
                                        
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Left Penal End -->
                    <!-- Left Penal End -->
                    <!-- Right Penal -->
                    <div class="col-lg-4 ps-xxl-8 mt-5 mt-lg-0">
                        <!-- License -->
                        <div class="card mb-4">
                            <div class="card-header border-bottom py-3">
                                <div class="d-flex align-items-center">
                                    <h6 class="m-0 h5">License Options</h6>
                                    <a class="ms-auto" href="#">Full details →</a>
                                </div>
                            </div>
                            <div class="card-body">
                                <form>
                                    <div class="form-check mb-4">
                                        <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                                        <label class="form-check-label d-flex align-items-center" for="flexRadioDefault2">
                                            <span>
                                                <span class="h6 d-block m-0">Standard</span>
                                                <span class="small">Single Site</span>
                                            </span>
                                            <span class="ms-auto">
                                                <span class="h3 font-weight-bold m-0">
                                                    Free
                                                </span>
                                            </span>
                                        </label>
                                    </div>
                                    <div class="form-check">
                                        
                                    </div>
                                </form>
                                <div class="pt-3">
                                <a href="http://localhost:8000/downloads/{{$data['id']}}" target="_blank"><button class="btn btn-primary w-100 my-1">
                                        Download
                                    </button></a>
                                    <a href="{{$data['live_preview']}}" target="_blank">
                                    <button class="btn btn-outline-primary w-100 my-1">
                                        Live preview
                                    </button></a>
                                </div>
                            </div>
                        </div>
                        <!-- Info -->
                        <div class="card mb-4">
                            <div class="card-body">
                                <div class="row no-gutters">
                                    
                                    <div class="border-start col-6 py-2 text-center">
                                        <div class="count">
                                            <i class="bi bi-cart text-primary"></i>
                                            {{$data['downloads']}}
                                        </div>
                                        <span class="small">Downloads</span>
                                    </div>
                                </div>
                                <div class="border-top mt-3">
                                    <ul class="list-unstyled list-type-01 pt-3">
                                        <li>Reviewed by the Bootstrap team</li>
                                        <li><a href="#">6 months technical support</a></li>
                                        <li>100% money back guarantee</li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                        <!-- Details -->
                        <div class="card">
                            <div class="card-header border-bottom py-3">
                                <h6 class="m-0 h5">Information</h6>
                            </div>
                            <div class="card-body pt-2">
                                <div class="border-bottom d-flex flex-row py-3">
                                    <span class="col-4 font-w-500 text-dark">Last Updated</span>
                                    <span>{{ \Carbon\Carbon::parse($data->updated)->format('d M Y')}} ({{ Carbon\Carbon::parse($data->updated)->diffForHumans()}}) </span>
                                </div>
                                <div class="border-bottom d-flex flex-row py-3">
                                    <span class="col-4 font-w-500 text-dark">Released</span>
                                    <span title="{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y')}}">{{ \Carbon\Carbon::parse($data->created_at)->format('d M Y')}}</span>
                                </div>
                                <div class="border-bottom d-flex flex-row py-3">
                                    <span class="col-4 font-w-500 text-dark">Version</span>
                                    <span>{{$data['version']}}</span>
                                </div>
                                
                                <div class="border-bottom d-flex flex-row py-3">
                                    <span class="col-4 font-w-500 text-dark">Category</span>
                                    <span><a href="#">PHP SCRIPTS</a></span>
                                </div>
                                <div class="border-bottom d-flex flex-row py-3">
                                    <span class="col-4 font-w-500 text-dark">Author</span>
                                    <span>
                                       <a href="http://localhost:8000/profile/{{$data['user_id']}}">{{$data['author_name']}}</a>
                                    </span>
                                </div>
                                <div class="border-bottom d-flex flex-row py-3">
                                    <span class="col-4 font-w-500 text-dark">Tags</span>
                                    <span><a href="#">admin</a>, <a href="#">admin template</a>, <a href="#">angular</a>, <a href="#">lightweight admin</a>, <a href="#">responsive dashboard</a></span>
                                </div>
                                <div class="d-flex flex-row align-items-center pt-3 justify-content-between">
                                    <span class="col-4 font-w-500 text-dark">Questions?</span>
                                    <span><a class="btn btn-outline-primary btn-sm" href="#">Contact Us</a></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Right Penal End -->
                </div>
            </div>
        </section>
        
    </main>
    <!-- End Main -->










<x-footer />