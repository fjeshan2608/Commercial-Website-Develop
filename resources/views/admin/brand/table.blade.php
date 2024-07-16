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

    <title>All-Brand</title>

@extends('layouts.back.back')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Brand Tables</h4>


      <div class="row row-cols-1 row-cols-md-3 g-4 mb-5">
        @foreach ($brand as $brand)
        <div class="col">
          <div class="card h-100">
            <img class="card-img-top" src="{{asset('storage/back/media/brand/'.$brand->brand_image)}}" alt="Card image cap">
            <div class="card-body">
              <h5 class="card-title">{{$brand->brand_name}}</h5>
              <div class="demo-inline-spacing">
                <button type="button" class="btn rounded-pill btn-primary"><a href="{{route('admin.brand.edit',$brand->brand_id)}}" style="color:white ">Edit</a></button>
                <button type="button" class="btn rounded-pill btn-secondary"><a href="{{route('admin.brand.del',$brand->brand_id)}}" style="color:white ">Delete</a></button>
              </div>
            </div>
            
          </div>
        </div>
        @endforeach

      </div>

  
    <!--/ Card layout -->
  </div>
  <!-- / Content -->



  <div class="content-backdrop fade"></div>
</div>
<!-- Content wrapper -->
   

 
@endsection