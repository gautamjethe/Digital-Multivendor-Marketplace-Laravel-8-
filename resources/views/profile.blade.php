<x-header />

<main>
        <!-- Breadcrumb -->
        <div class="py-3 bg-gray-100">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-lg-6 my-2">
                        <h1 class="m-0 h4 text-center text-lg-start">{{$profile['name']}}</h1>
                    </div>
                    <div class="col-lg-6 my-2">
                        <ol class="breadcrumb dark-link m-0 small justify-content-center justify-content-lg-end">
                            <li class="breadcrumb-item"><a class="text-nowrap" href="#"><i class="bi bi-home"></i>Home</a></li>
                            <li class="breadcrumb-item text-nowrap active" aria-current="page">Profile</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Breadcrumb -->
        <!-- blog -->
        <div class="py-4 py-lg-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 my-3">
                        <div class="card">
                            <div class="card-body">
                                <article>
                                    <div class="mb-5">
                                        <img class="img-fluid" src="/uploads/{{$profile['profile_avatar']}}" title="" alt="">
                                    </div>
                                    <h3>Portfolio</h3>
                                    <p>{{$profile['bio']}}</p>
                                    
                                    <h4>Skills</h4>
                                    <ol class="list-type-01 list-unstyled pt-2 mb-4">
                                    <pre><code> {{$profile['skills']}} </code></pre>
                                    </ol>
                                    
                                </article>
                                
                            </div>
                        </div>    
                        
                    </div>    
                    <div class="col-lg-4 my-3 ps-xl-9">
                        
                        <div class="card mt-5">
                            <div class="card-header bg-transparent border-bottom p-3">
                                <span class="h5 m-0">Profile Of {{$profile['name']}}</span>
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="#" class="list-group-item list-group-item-action d-flex py-3">
                                    <div class="avatar rounded overflow-hidden">
                                        <img class="img-fluid" src="/uploads/{{$profile['profile_image']}}" title="" alt="">
                                    </div>
                                    
                                </a>
                                
                            </div>
                        </div>
                        <div class="card mt-5">
                            <div class="card-header bg-transparent border-bottom p-3">
                                <span class="h5 m-0">Information</span>
                            </div>
                            <div class="list-group list-group-flush">
                                <a href="" class="list-group-item list-group-item-action d-flex justify-content-between py-3">
                                    <div>
                                        <span>Member Since : <b> {{ \Carbon\Carbon::parse($profile->created_at)->format('d M Y')}}</b></span>
                                    </div>
                                    
                                    <div>
                                       
                                    </div>
                                </a>
                                <a href="#" class="list-group-item list-group-item-action d-flex justify-content-between py-3">
                                    <div>
                                        <span>Products : <b> {{ $profile['products']}}</b></span>
                                    </div>
                                    <div>
                                        
                                    </div>
                                </a>
                                
                            </div>
                        </div>
                        
                        
                    </div>
                </div>
            </div>
        </div>
        <!-- blog end -->
    </main>











<x-footer />