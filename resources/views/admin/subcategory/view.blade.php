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

    <title>Update-Sub-Category</title>

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
              <form  action="{{route('admin.subcategory.update')}}" method="post">
                @csrf
                <div class="row mb-3">
                  <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Sub-Category Name</label>
                  <div class="col-sm-10">
                    <div class="input-group input-group-merge">
                      <span id="basic-icon-default-fullname2" class="input-group-text"
                        ><i class="bx bx-book"></i
                      ></span>
                      <input
                        type="text"
                        name="name"
                        class="form-control"
                        value="{{$subcategory->subcategory_name}}"
                        id="basic-icon-default-fullname"
                        placeholder="Category"
                        aria-label="Category"
                        aria-describedby="basic-icon-default-fullname2"
                      />
                    </div>
                  </div>
                </div>
                {{-- Category --}}
                <div class="row mb-3">
                    <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Category Name</label>
                    <div class="col-sm-10">
                      <div class="input-group input-group-merge">
                       
                        <select class="form-select" name="category" id="exampleFormControlSelect1" aria-label="Default select example">
                            <option selected="">Open this select menu</option>
                            @foreach ($cat as $cat)
                            <option value="{{$cat->category_id }}">{{$cat->category_name}}</option>  
                            @endforeach
                            
                          </select>
                      </div>
                    </div>
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
@endsection