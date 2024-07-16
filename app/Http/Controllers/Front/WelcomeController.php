<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\Category;

class WelcomeController extends Controller
{
    //
    public function index(){
        $cat=Category::all();
        return view('welcome',compact('cat'));
    }
}
