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

    <title>View-Product</title>

@extends('layouts.back.back')
@section('content')
<style>
  .col-md-4 img{
    height: 100px;
    width: 100%;
  }
  .main-img img{
    width: 100%;
    
  }
</style>
<section class="content">

    <!-- Default box -->
    <div class="card card-solid">
      <div class="card-body">
        <div class="row">
          <div class="col-6 col-sm-6  main-img">
            <img src="{{asset('storage/back/media/main/'.$product->main_thumbnail)}}" class="product-image" alt="Product Image">
            <hr>
            <div class="row">
              <div class="col-md-4">
                <div class="product-image-thumb active"><img src="{{asset('storage/back/media/img1/'.$product->image_1)}}" alt="Product Image"></div>
              </div>
              <div class="col-md-4">
                <div class="product-image-thumb"><img src="{{asset('storage/back/media/img2/'.$product->image_2)}}" alt="Product Image"></div>
              </div>
              <div class="col-md-4">
                <div class="product-image-thumb"><img src="{{asset('storage/back/media/img3/'.$product->image_3)}}" alt="Product Image"></div>
              </div>
            </div>
          </div>
          <div class="col-6 col-sm-6">
            <h1 class="my-3">{{$product->product_name}}</h1>
            <p>{{$product->product_description}}</p>
            <h3 class="my-3" style="color: red">Product Code : {{$product->product_code}}</h3>
            <hr>
            <h4>Available Colors</h4>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-default text-center active">
                <input type="radio" name="color_option" id="color_option_a1" autocomplete="off" checked="">
                {{$product->color}}
                <br>
                <i class="fas fa-circle fa-2x text-green"></i>
              </label>


            </div>

            <h4 class="mt-3">Size <small>Please select one</small></h4>
            <div class="btn-group btn-group-toggle" data-toggle="buttons">
              <label class="btn btn-default">
                <input type="radio" name="color_option" id="color_option_b1" autocomplete="off">
                {{$product->size}}
              </label>

            </div>

            <div class="bg-gray py-2 px-3 mt-4">
              <h2 class="mb-0">
                BDT : {{$product->product_purchase_price}}
              </h2>
              <h4 class="mt-0">
                <small>Selling Price : {{$product->product_purchase_price}} </small><br>
               
              </h4>
            </div>
            <h1 style="color: red">Discount : {{$product->discount_price}} </h1>
            <h5>In Stock : {{$product->in_stock}}</h5>

          

            <div class="mt-4 product-share">
              <a href="#" class="text-gray">
                <i class="fab fa-facebook-square fa-2x"></i>
              </a>
              <a href="#" class="text-gray">
                <i class="fab fa-twitter-square fa-2x"></i>
              </a>
              <a href="#" class="text-gray">
                <i class="fas fa-envelope-square fa-2x"></i>
              </a>
              <a href="#" class="text-gray">
                <i class="fas fa-rss-square fa-2x"></i>
              </a>
            </div>
          </div>
        </div>
        <div class="row mt-4">
          <nav class="w-100">
            <div class="nav nav-tabs" id="product-tab" role="tablist">
              <a class="nav-item nav-link active" id="product-desc-tab" data-toggle="tab" href="#product-desc" role="tab" aria-controls="product-desc" aria-selected="true">Description</a>
              <a class="nav-item nav-link" id="product-comments-tab" data-toggle="tab" href="#product-comments" role="tab" aria-controls="product-comments" aria-selected="false">Comments</a>
              <a class="nav-item nav-link" id="product-rating-tab" data-toggle="tab" href="#product-rating" role="tab" aria-controls="product-rating" aria-selected="false">Rating</a>
            </div>
          </nav>
          <div class="tab-content p-3" id="nav-tabContent">
            <div class="tab-pane fade show active" id="product-desc" role="tabpanel" aria-labelledby="product-desc-tab"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Morbi vitae condimentum erat. Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia Curae; Sed posuere, purus at efficitur hendrerit, augue elit lacinia arcu, a eleifend sem elit et nunc. Sed rutrum vestibulum est, sit amet cursus dolor fermentum vel. Suspendisse mi nibh, congue et ante et, commodo mattis lacus. Duis varius finibus purus sed venenatis. Vivamus varius metus quam, id dapibus velit mattis eu. Praesent et semper risus. Vestibulum erat erat, condimentum at elit at, bibendum placerat orci. Nullam gravida velit mauris, in pellentesque urna pellentesque viverra. Nullam non pellentesque justo, et ultricies neque. Praesent vel metus rutrum, tempus erat a, rutrum ante. Quisque interdum efficitur nunc vitae consectetur. Suspendisse venenatis, tortor non convallis interdum, urna mi molestie eros, vel tempor justo lacus ac justo. Fusce id enim a erat fringilla sollicitudin ultrices vel metus. </div>
            </div>
        </div>
      </div>
      <!-- /.card-body -->
    </div>
    <!-- /.card -->

  </section>
@endsection