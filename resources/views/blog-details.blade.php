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
        
        <div class="py-4 py-lg-6">
            <div class="container">
                <div class="row">
                    <div class="col-lg-8 my-3">
                        <div class="card">
                            <div class="card-body">
                                <article>
                                    <div class="mb-5">
                                        <img class="img-fluid" src="{{env('APP_URL')}}/uploads/{{$data['image']}}" title="" alt="">
                                    </div>
                                    <h3>{{$data['title']}}</h3>
                                    <p>{{$data['content']}}</p>
                                   
                                    
                                    
                                </article>
                                
                            </div>
                            <?php
                             $default = "https://www.gravatar.com/avatar/";
                             $size = 80;
                             $grav_url = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $data['email'] ) ) ) . "?d=" . urlencode( $default ) . "&s=" . $size;   

                            ?>
                            <div class="card-footer">
                                <div class="row align-items-center">
                                    <div class="col-8">
                                        <div class="media d-flex align-items-center">
                                            <div class="avatar rounded-circle">
                                                <img class="img-fluid" src="{{$grav_url}}" title="" alt="">
                                            </div>
                                            <div class="col ps-3">
                                               <a href="{{env('APP_URL')}}/profile/{{$data['uid']}}"><h6 class="mb-1">{{$data['username']}}</h6></a>
                                                <span>Published on {{ \Carbon\Carbon::parse($data->created_at)->format('M d, Y')}}</span>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-4">
                                        <div class="nav justify-content-end align-items-center">
                                            <a class="icon icon-sm rounded-circle icon-primary ms-2" href="#">
                                                <i class="bi bi-facebook"></i>
                                            </a>
                                            <a class="icon icon-sm rounded-circle icon-primary ms-2" href="#">
                                                <i class="bi bi-twitter"></i>
                                            </a>
                                            <a class="icon icon-sm rounded-circle icon-primary ms-2" href="#">
                                                <i class="bi bi-instagram"></i>
                                            </a>
                                            <a class="icon icon-sm rounded-circle icon-primary ms-2" href="#">
                                                <i class="bi bi-linkedin"></i>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="card mt-5">
                            <div class="card-header border-bottom p-3">
                                <h4 class="m-0">{{$counts}} Responses</h4>
                            </div>
                            @foreach($results as $res)
                            <div class="card-body">
                                <?php
                                $default1 = "https://www.gravatar.com/avatar/";
                                $size1 = 80;
                                $grav_url1 = "https://www.gravatar.com/avatar/" . md5( strtolower( trim( $res->email ) ) ) . "?d=" . urlencode( $default1 ) . "&s=" . $size1;

                                ?>
                                <ul class="list-unstyled m-0">
                                    <li class="media d-flex">
                                        <div class="avatar rounded-circle">
                                            <img class="img-fluid" src="{{$grav_url1}}" title="" alt="">
                                        </div>
                                        <div class="col ps-3">
                                          <a href="{{env('APP_URL')}}/profile/{{$res->uid}}"><h6 class="mt-0 mb-1">{{$res->username}}</h6></a>
                                            <label class="mb-2 small">{{ \Carbon\Carbon::parse($res->created_at)->format('d M Y')}}</label>
                                            <p>{{$res->content}}</p>
                                            <div class="nav dark-link small">
                                                
                                            </div>
                                            
                                        </div>
                                    </li>
                                    
                                    
                                </ul>
                            </div>
                            @endforeach
                        </div>
                        <div class="card mt-5">
                            <div class="card-header border-bottom p-3">
                                <h4 class="m-0">Leave a Reply</h4>
                            </div>
                            <div class="card-body">
                                <form action="" method="POST">
                                    @csrf
                                    <div class="row">
                                        
                                        
                                        <div class="col-12">
                                            <div class="form-group mb-3">
                                                <label class="form-label rd-input-label" for="contact-message">Your Comment</label>
                                                <textarea class="form-control" id="contact-message" required name="content" rows="8"></textarea>
                                            </div>
                                        </div>
                                        <div class="col-12">
                                            <button class="btn btn-primary" type="submit" >Send Message</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
        <!-- blog end -->
    </main>











<x-footer />