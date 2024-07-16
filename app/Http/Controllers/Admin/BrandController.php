<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Brand;
use Str;
use Image;

class BrandController extends Controller
{
    //
    public function index(){
        return view('admin.brand.index');
    }
    public function add(Request $req)
    {
        $store=new Brand();
        $store->brand_name=$req->name;
        $store->brand_slug=Str::slug($req->name);
        if ($req->file('image')) {
            $image = $req->file('image');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/brand/' . $image_ext);
            $store->brand_image = $image_ext;
        }

        $store->save();
        if($store){
            $notification = array(
                'message' => 'Coruse Added Successfully',
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
        $brand=Brand::all();
        return view('admin.brand.table',compact('brand'));
    }

    public function edit($id){
        $brand=Brand::find($id);
        return view('Admin.brand.view',compact('brand'));
        
    }
    // Update
    public function update(Request $req)
    {
        $store=Brand::find($req->b_id);
        $store->brand_name=$req->name;
        $store->brand_slug=Str::slug($req->name);
        if ($req->file('image')) {
            $image = $req->file('image');
            $image_ext = $req->name . '.' . $image->getClientOriginalExtension();
            Image::make($image)->resize(300, 300)->save('storage/back/media/brand/' . $image_ext);
            $store->brand_image = $image_ext;
        }

        $store->save();
        if($store){
            $notification = array(
                'message' => 'Brand Update Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Update!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->route('admin.all.brand')->with($notification);


    }
    // Delete
    public function del($id){
        $Brand=Brand::find($id);
        $Brand->delete();
        $notification = array(
            'message' => 'Brand Delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
