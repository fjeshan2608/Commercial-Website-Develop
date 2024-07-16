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

    <title>All-Product</title>

@extends('layouts.back.back')
@section('content')

<!-- Content wrapper -->
<div class="content-wrapper">
    <!-- Content -->

    <div class="container-xxl flex-grow-1 container-p-y">
      <h4 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Tables /</span> Product Tables</h4>


      <div class="row mb-5">
        @foreach ($product as $product)
        <div class="col-md-6 col-lg-4 mb-3">
            <div class="card h-100">
              <img class="card-img-top" src="{{asset('storage/back/media/main/'.$product->main_thumbnail)}}" alt="Card image cap">
              <div class="card-body">
                <h5 class="card-title">{{$product->product_name}}</h5>
                <p class="card-text">
                    {{$product->product_description}}
                </p>
                <a href="{{route('admin.product.view',$product->product_id)}}" class="btn btn-outline-primary">View</a>
                <a href="{{route('admin.product.edit',$product->product_id)}}" class="btn btn-outline-secondary">Edit</a>
                <a href="{{route('admin.product.del',$product->product_id)}}" class="btn btn-outline-danger">Delete</a>
                <a href="#"  class="btn btn-outline-primary" data-bs-toggle="modal" data-bs-target="#addStock{{$product->product_id}}">Stock</a>
              </div>
            </div>
          </div>  
              <!-- Stock Modal -->
              <div class="modal fade" id="addStock{{$product->product_id}}" tabindex="-1" aria-hidden="true">
                <div class="modal-dialog modal-sm" role="document">
                  <div class="modal-content">
                    <form action="{{route('admin.stock.save')}}" method="POST">
                      @csrf
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel2">{{$product->product_name}}</h5>
                      <button
                        type="button"
                        class="btn-close"
                        data-bs-dismiss="modal"
                        aria-label="Close"
                      ></button>
                    </div>
                    <div class="modal-body">
                      <div class="row">
                        <div class="col mb-3">
                          <label for="nameSmall" class="form-label">Qty</label>
                          <input type="number" id="nameSmall" class="form-control" name="qty" placeholder="Qty" />
                          <input type="hidden" id="nameSmall" class="form-control" name="product_id" value="{{$product->product_id}}" />
                        </div>
                      </div>
                    </div>
                    <div class="modal-footer">
                      <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">
                        Close
                      </button>
                      <button type="submit" class="btn btn-primary">Save changes</button>
                    </div>
                    </form>
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