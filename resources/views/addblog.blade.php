<x-adminhead />
<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title">
                  Add Blog
                </h2>
                
              </div>
              <!-- Page title actions -->
              
            </div>
          </div>
        </div>
        <div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                
              </div>
            </div>
          </div>
        </div>
        <div class="page-body">
          <div class="container-xl">
            <div class="row row-cards">
              <div class="col-12">
                
    </div>        
        <div class="col-md-6">
              <div class="card">
                
                <div class="card-body">
                  <form action="" method="POST" enctype='multipart/form-data'>
                      @csrf
                    <div class="form-group mb-3 ">
                      <label class="form-label">Blog Title</label>
                      <div>
                        <input type="text" name="title" class="form-control" aria-describedby="emailHelp" >
                        
                      </div>
                    </div>
                    
                    <div class="form-group mb-3 ">
                      <label class="form-label">Blog Content</label>
                      <div>
                      <textarea class="form-control" id="product_longdes" name="content" rows="18">
                        </textarea>
                    </div>
                    
                    <div class="form-group mb-3 ">
                      <label class="form-label">Blog Image</label>
                      <div>
                      <input type="file" class="form-control" name="file">
                        
                      </div>
                    </div>
                   
                    
                     
                                 
                    <div class="form-footer">
                      <button type="submit" class="btn btn-primary">Submit</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>    











<x-adminfoot />