<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use App\Models\Brand;
use App\Models\Product;
use App\Models\Stock;
use App\Models\Stockdetail;
use Str;
use Image;
class ProductController extends Controller
{
    //
    public function index(){
        $cat=Category::all();
        $sub=SubCategory::all();
        $brand=Brand::all();
        return view('Admin.Product.index',compact('cat','sub','brand'));
    }

    //save product
    public function save(Request $req){
        $store = new Product();
        $store->category_id = $req->cat;
        $store->subcategory_id = $req->subcategory_id;
        $store->brand_id = $req->brand;
        $store->product_name = $req->name;
        $store->product_slug = Str::slug($req->name);
        $store->product_code = $req->code;
        $store->product_description = $req->des;
        $store->product_tags = $req->tags;
        $store->color = $req->color;
        $store->size = $req->size;
        $store->product_purchase_price = $req->main_price;
        $store->product_selling_price = $req->selling_price;
        $store->discount_price = $req->discount_price;
        $store->in_stock = $req->in_stock;

  
        if ($req->file('main_thumb')) {
            $image = $req->file('main_thumb');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/main/' . $image_ext);
            $store->main_thumbnail = $image_ext;
        }

        if ($req->file('main_thumb')) {
            $image = $req->file('image1');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/img1/' . $image_ext);
            $store->image_1 = $image_ext;
        }

        if ($req->file('main_thumb')) {
            $image = $req->file('image2');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/img2/' . $image_ext);
            $store->image_2 = $image_ext;
        }

        if ($req->file('main_thumb')) {
            $image = $req->file('image3');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/img3/' . $image_ext);
            $store->image_3 = $image_ext;
        }

        $store->on_sale = $req->on_sale;
        $store->best_rated = $req->best_rated;
        $store->flast_sale = $req->flash_sale;
        $store->save();

        $stock = new Stock();
        $stock->wirehosue=$req->ware;
        $stock->wire_phone=$req->number;
        $stock->qty	=$req->in_stock;
        $stock->save();


        $id = $stock->stock_id;

        $stockdetail = new Stockdetail();
        $stockdetail->stock_id = $id;
        $stockdetail->qty =$req->in_stock;
        $stockdetail->added_on = date('d-m-Y');
        $stockdetail->added_month = date('F');
        $stockdetail->added_year = date('Y');
        $stockdetail->save();

        if($store){
            $notification = array(
                'message' => 'Product Added Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Add!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);

    }
    public function table(){
        $product=Product::all();
        return view('Admin.Product.table',compact('product'));
    }

    public function view($id){
        $product=Product::find($id);
        return view('Admin.Product.view',compact('product'));
    }
    // Edit View
    public function edit($id){
        $cat=Category::all();
        $sub=SubCategory::all();
        $brand=Brand::all();
        $product=Product::find($id);
        return view('Admin.product.edit',compact('product','cat','sub','brand'));
        
    }
    //save product
    public function update(Request $req){
        $store = Product::find($req->c_id);
        $store->category_id = $req->cat;
        $store->subcategory_id = $req->subcategory_id;
        $store->brand_id = $req->brand;
        $store->product_name = $req->name;
        $store->product_slug = Str::slug($req->name);
        $store->product_code = $req->code;
        $store->product_description = $req->des;
        $store->product_tags = $req->tags;
        $store->color = $req->color;
        $store->size = $req->size;
        $store->product_purchase_price = $req->main_price;
        $store->product_selling_price = $req->selling_price;
        $store->discount_price = $req->discount_price;
        $store->in_stock = $req->in_stock;

  
        if ($req->file('main_thumb')) {
            $image = $req->file('main_thumb');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/main/' . $image_ext);
            $store->main_thumbnail = $image_ext;
        }

        if ($req->file('main_thumb')) {
            $image = $req->file('image1');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/img1/' . $image_ext);
            $store->image_1 = $image_ext;
        }

        if ($req->file('main_thumb')) {
            $image = $req->file('image2');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/img2/' . $image_ext);
            $store->image_2 = $image_ext;
        }

        if ($req->file('main_thumb')) {
            $image = $req->file('image3');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/img3/' . $image_ext);
            $store->image_3 = $image_ext;
        }

        $store->on_sale = $req->on_sale;
        $store->best_rated = $req->best_rated;
        $store->flast_sale = $req->flash_sale;
        $store->save();

        if($store){
            $notification = array(
                'message' => 'Product Added Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Add!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->back()->with($notification);

    }
    // Delete
    public function del($id){
        $Product=Product::find($id);
        $Product->delete();
        $notification = array(
            'message' => 'Product Delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
