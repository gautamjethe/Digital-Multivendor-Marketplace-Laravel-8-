<x-adminhead />

<div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    
                  </div>
                </div>
              </div>
              <div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                   
                    <table class="table table-vcenter card-table">
                      <thead>
                        <tr>
                          <th>Product Name</th>
                          <th>Version</th>
                          <th>Released On</th>
                          <th>Updated On</th>
                          <th>Actions</th>
                          <th class="w-1"></th>
                        </tr>
                      </thead>
                      @foreach($list as $lists) 
                      <tbody>
                        <tr>
                          <td>
                            <div class="d-flex py-1 align-items-center">
                              <span class="avatar me-2" style="background-image: url({{env('APP_URL')}}/uploads/{{$lists['image_name']}})"></span>
                              <div class="flex-fill">
                                <div class="font-weight-medium">{{$lists['product_name']}}</div>
                                
                              </div>
                            </div>
                          </td>
                          <td>                            
                            <div class="text-muted">{{$lists['version']}}</div>
                          </td>
                          <td class="text-muted">
                          {{$lists['created_at']}}
                          </td>
                          <td>
                          {{$lists['updated']}}
                          </td>
                          <td>
                            <a href="{{url()->current()}}/edit/{{$lists['id']}}">Edit</a>
                          </td>
                        </tr>                        
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
              @endforeach
              <div class="col-12">
                <div class="card">
                  <div class="table-responsive">
                    
                  </div>
                </div>
              </div>
              
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>










<x-adminfoot />