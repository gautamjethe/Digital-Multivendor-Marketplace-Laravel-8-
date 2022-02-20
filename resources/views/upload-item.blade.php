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
                      <label class="form-label">Product Name</label>
                      <div>
                        <input type="text" name="product_name" class="form-control" aria-describedby="emailHelp" >
                        
                      </div>
                    </div>
                    <div class="form-group mb-3 ">
                      <label class="form-label">Product Short Desciption</label>
                      <div>
                        <input type="text"  name="product_shortdes" class="form-control" >

                      </div>
                    </div>
                    <div class="form-group mb-3 ">
                      <label class="form-label">Product Long Desciption</label>
                      <div>
                      <textarea class="form-control" id="product_longdes" name="product_longdes" rows="18">
                        </textarea>
                    </div>
                    <div class="form-group mb-3 ">
                      <label class="form-label">Product Features</label>
                      <div>
                      <textarea class="form-control" id="product_features" name="product_features" rows="18">
                        </textarea>
                        
                      </div>
                    </div>
                    <div class="form-group mb-3 ">
                      <label class="form-label">Product Image</label>
                      <div>
                      <input type="file" class="form-control" name="file">
                        
                      </div>
                    </div>
                    <div class="form-group mb-3 ">
                      <label class="form-label">Product changelogs</label>
                      <div>
                      <textarea class="form-control" id="changelogs" name="changelogs" rows="12">
                        </textarea>
                        
                      </div>
                    </div>
                    <div class="form-group mb-3 ">
                      <label class="form-label">Product Main File (ZIP FILE)</label>
                      <div>
                      <input type="file" class="form-control" name="mainfile">
                        
                      </div>
                    </div>
                    <div class="form-group mb-3 ">
                      <label class="form-label">Product Version</label>
                      <div>
                      <input type="text"  name="version" class="form-control" >
                        
                      </div>
                    </div>    
                    <div class="form-group mb-3 ">
                      <label class="form-label">Product Preview</label>
                      <div>
                        <input type="text" name="live_preview" class="form-control" aria-describedby="emailHelp" >
                        
                      </div>
                    </div>                
                    <div class="form-footer">
                      <button type="submit" class="btn btn-primary">Upload</button>
                    </div>
                  </form>
                </div>
              </div>
            </div>       
<x-adminfoot />          