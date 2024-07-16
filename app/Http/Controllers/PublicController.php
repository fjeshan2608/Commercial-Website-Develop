<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Subcategory;

class PublicController extends Controller
{
    //get sub cate
    public function getSubcat($id){
        return $data = Subcategory::where('category_id',$id)->get();
       return response()->json(data);
    }
}
