<x-adminhead />

<div class="page-wrapper">
        <div class="container-xl">
          <!-- Page title -->
          <div class="page-header d-print-none">
            <div class="row align-items-center">
              <div class="col">
                <!-- Page pre-title -->
                <h2 class="page-title">
                  Upload Php Script
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
                      <label class="form-label">Profile Image</label>
                      <div>
                        <input type="file" id="file" name="file" class="form-control" aria-describedby="emailHelp" required >
                        
                      </div>
                      <div class="form-footer">
                      <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                    </div>
                    
                  </form>
                </div>
              </div>
            </div>       







<x-adminfoot />