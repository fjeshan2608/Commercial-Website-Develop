<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use App\Models\SubCategory;
use Str;

class SubCategoryController extends Controller
{
    //
    public function index(){
        $cat=Category::all();
        return view('admin.subcategory.index',compact('cat'));
    }
    public function add(Request $req)
    {
        $store=new SubCategory();
        $store->subcategory_name=$req->name;
        $store->subcategory_slug=Str::slug($req->name);
        $store->category_id=$req->category;

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
        $subcat=SubCategory::all();
        return view('admin.subcategory.table',compact('subcat'));
    }

    // Edit Page
    public function edit($id){
        $cat=Category::all();
        $subcategory=SubCategory::find($id);
        return view('Admin.subcategory.view',compact('subcategory','cat'));
        
    }
    public function update(Request $req)
    {
        $store=SubCategory::find($req->c_id);
        $store->subcategory_name=$req->name;
        $store->subcategory_slug=Str::slug($req->name);
        $store->category_id=$req->category;

        $store->save();
        if($store){
            $notification = array(
                'message' => 'Subcategory Update Successfully',
                'alert-type' => 'success'
            );
        }
        else{
            $notification = array(
                'message' => 'Failed To Update!!',
                'alert-type' => 'error'
            );
        }
        return redirect()->route('admin.all.category')->with($notification);


    }
    public function del($id){
        $SubCategory=SubCategory::find($id);
        $SubCategory->delete();
        $notification = array(
            'message' => 'SubCategory Delete Successfully',
            'alert-type' => 'error'
        );
        return redirect()->back()->with($notification);
    }
}
