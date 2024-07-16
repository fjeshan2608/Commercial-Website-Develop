<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;
use Str;

class CategoryController extends Controller
{
    //
    public function index(){
        return view('admin.category.index');
    }

    public function add(Request $req)
    {
        $store=new Category();
        $store->category_name=$req->name;
        $store->category_slug=Str::slug($req->name);

        $store->save();
        if($store){
            $notification = array(
                'message' => 'Category Added Successfully',
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
        $category=Category::all();
        return view('admin.category.table',compact('category'));
    }

    public function edit($id){
        $category=Category::find($id);
        return view('Admin.category.view',compact('category'));
        
    }

    public function update(Request $req)
    {
        $store=Category::find($req->c_id);
        $store->category_name=$req->name;
        $store->category_slug=Str::slug($req->name);

        $store->save();
        if($store){
            $notification = array(
                'message' => 'Coruse Update Successfully',
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
        $category=Category::find($id);
        $category->delete();
        $notification = array(
            'message' => 'Category Delete Successfully',
            'alert-type' => 'success'
        );
        return redirect()->back()->with($notification);
    }
}
