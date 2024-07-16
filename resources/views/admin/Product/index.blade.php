<html
  lang="en"
  class="light-style layout-menu-fixed"
  dir="ltr"
  data-theme="theme-default"
  data-assets-path="storage/back/assets/"
  data-template="vertical-menu-template-free"
>
  <head>
    <meta charset="utf-8" />
    <meta
      name="viewport"
      content="width=device-width, initial-scale=1.0, user-scalable=no, minimum-scale=1.0, maximum-scale=1.0"
    />

    <title>Add-Product</title>

@extends('layouts.back.back')
@section('content')
<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Forms/</span> Horizontal Layouts</h4>

      <!-- Basic Layout & Basic with Icons -->
      <div class="row">
       
        <!-- Basic with Icons -->
        <div class="col-xxl">
          <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
              <h5 class="mb-0">Basic with Icons</h5>
              <small class="text-muted float-end">Merged input group</small>
            </div>
           
            <div class="card-body">
              <form  action="{{route('admin.product.save')}}" method="post" enctype="multipart/form-data">
                @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Product Name</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"
                        ><i class="bx bx-book"></i
                      ></span>
                      <input
                        type="text"
                        name="name"
                        class="form-control"
                        id="basic-icon-default-fullname"
                        placeholder="Category"
                        aria-label="Category"
                        aria-describedby="basic-icon-default-fullname2"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Product Code</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-company2" class="input-group-text"
                        ><i class="bx bx-buildings"></i
                      ></span>
                      <input
                        type="text"
                        name="code"
                        id="basic-icon-default-company"
                        class="form-control"
                        placeholder="ACME Inc."
                        aria-label="ACME Inc."
                        aria-describedby="basic-icon-default-company2"
                      />
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                  <label class="col-sm-2 form-label" for="basic-icon-default-message">Product Description</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-message2" class="input-group-text"
                        ><i class="bx bx-comment"></i
                      ></span>
                      <textarea
                        id="basic-icon-default-message"
                        class="form-control"
                        name="des"
                        placeholder="Hi, Do you have a moment to talk Joe?"
                        aria-label="Hi, Do you have a moment to talk Joe?"
                        aria-describedby="basic-icon-default-message2"
                      ></textarea>
                    </div>
                  </div>
                </div>
                <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-message">Catagory</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                       
                        <select class="form-select" name="cat" id="category_id" aria-label="Default select example">
                            <option selected="">Open this select menu</option>
                            @foreach ($cat as $cat)
                            <option value="{{$cat->category_id }}">{{$cat->category_name}}</option>  
                            @endforeach                            
                          </select>
                      </div>
                    </div>
                  </div>

                  <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-message">Sub-Catagory</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                       
                        <select class="form-select" name="subcategory_id" id="subcategory_id" aria-label="Default select example">
                            <option selected="">Open this select menu</option>
                            @foreach ($sub as $sub)
                            <option value="{{$sub->subcategory_id}}">{{$sub->subcategory_name}}</option>  
                            @endforeach 
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-message">Brand</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                       
                        <select class="form-select" id="exampleFormControlSelect1" name="brand" aria-label="Default select example">
                            <option selected="">Open this select menu</option>
                            @foreach ($brand as $brand)
                            <option value="{{$brand->brand_id }}">{{$brand->brand_name}}</option>  
                            @endforeach 
                          </select>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 form-label" for="basic-icon-default-message">Product Tags</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-message2" class="input-group-text"
                          ><i class="bx bx-comment"></i
                        ></span>
                        <textarea
                          id="basic-icon-default-message"
                          class="form-control"
                          name="tags"
                          placeholder="Hi, Do you have a moment to talk Joe?"
                          aria-label="Hi, Do you have a moment to talk Joe?"
                          aria-describedby="basic-icon-default-message2"
                        ></textarea>
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Product Color</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"
                          ><i class="bx bx-buildings"></i
                        ></span>
                        <input
                          type="text"
                          name="color"
                          id="basic-icon-default-company"
                          class="form-control"
                          placeholder="ACME Inc."
                          aria-label="ACME Inc."
                          aria-describedby="basic-icon-default-company2"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Product Size</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"
                          ><i class="bx bx-buildings"></i
                        ></span>
                        <input
                          type="text"
                          name="size"
                          id="basic-icon-default-company"
                          class="form-control"
                          placeholder="ACME Inc."
                          aria-label="ACME Inc."
                          aria-describedby="basic-icon-default-company2"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Product Actual Price</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"
                          ><i class="bx bx-buildings"></i
                        ></span>
                        <input
                          type="text"
                          id="basic-icon-default-company"
                          name="main_price"
                          class="form-control"
                          placeholder="ACME Inc."
                          aria-label="ACME Inc."
                          aria-describedby="basic-icon-default-company2"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Selling Price</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"
                          ><i class="bx bx-buildings"></i
                        ></span>
                        <input
                          type="text"
                          name="selling_price"
                          id="basic-icon-default-company"
                          class="form-control"
                          placeholder="ACME Inc."
                          aria-label="ACME Inc."
                          aria-describedby="basic-icon-default-company2"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Discount Price</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"
                          ><i class="bx bx-buildings"></i
                        ></span>
                        <input
                          type="text"
                          name="discount_price"
                          id="basic-icon-default-company"
                          class="form-control"
                          placeholder="ACME Inc."
                          aria-label="ACME Inc."
                          aria-describedby="basic-icon-default-company2"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Stock Number</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"
                          ><i class="bx bx-buildings"></i
                        ></span>
                        <input
                          type="text"
                          name="in_stock"
                          id="basic-icon-default-company"
                          class="form-control"
                          placeholder="ACME Inc."
                          aria-label="ACME Inc."
                          aria-describedby="basic-icon-default-company2"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Warehouse</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"
                          ><i class="bx bx-buildings"></i
                        ></span>
                        <input
                          type="text"
                          name="ware"
                          id="basic-icon-default-company"
                          class="form-control"
                          placeholder="ACME Inc."
                          aria-label="ACME Inc."
                          aria-describedby="basic-icon-default-company2"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Warehouse Number Number</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <span id="basic-icon-default-company2" class="input-group-text"
                          ><i class="bx bx-buildings"></i
                        ></span>
                        <input
                          type="text"
                          name="number"
                          id="basic-icon-default-company"
                          class="form-control"
                          placeholder="ACME Inc."
                          aria-label="ACME Inc."
                          aria-describedby="basic-icon-default-company2"
                        />
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Main Thumbnail</label>
                    <div class="col-sm-10">
                        <img id="studentPhoto">
                      <div class="input-group input-group-merge">
                        <input class="form-control" type="file" name="main_thumb" id="formFile"  onchange="studentphoto(this);" id="photo" accept="image/*">
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Image 1</label>
                    <div class="col-sm-10">
                        <img id="studentPhoto2">
                      <div class="input-group input-group-merge">
                        <input class="form-control" type="file" name="image1" id="formFile" onchange="studentphoto2(this);" id="photo" accept="image/*">
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Image 2</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <input class="form-control" type="file" name="image2" id="formFile">
                      </div>
                    </div>
                  </div>
                  <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-company">Image 3</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                        <input class="form-control" type="file" name="image3" id="formFile">
                      </div>
                    </div>
                  </div>
                  <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" value="1" name="on_sale" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckChecked">On Sale</label>
                  </div>
                  <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" value="1" name="best_rated" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Best Reated</label>
                  </div>
                  <div class="form-check form-switch mb-2">
                    <input class="form-check-input" type="checkbox" value="1" name="flash_sale" id="flexSwitchCheckDefault">
                    <label class="form-check-label" for="flexSwitchCheckChecked">Flash Sale</label>
                  </div>

                <div class="row justify-content-end">
                  <div class="col-sm-10">
                    <button type="submit" class="btn btn-primary">Send</button>
                  </div>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- / Content -->

  

    <div class="content-backdrop fade"></div>
  </div>
  <!-- Content wrapper -->
</div>



<script>
    function studentphoto(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $('#studentPhoto')
                  .attr('src', e.target.result)
				  .attr("class","img-thumbnail mb-2")
              };
              reader.readAsDataURL(input.files[0]);
          }
        }

        function studentphoto2(input) {
          if (input.files && input.files[0]) {
              var reader = new FileReader();
              reader.onload = function (e) {
                  $('#studentPhoto2')
                  .attr('src', e.target.result)
				  .attr("class","img-thumbnail mb-2")
              };
              reader.readAsDataURL(input.files[0]);
          }
        }




</script>
@endsection