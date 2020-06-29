<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use App\Category;
use Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class CategoryController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }

    function AddCategory(){
        $users=Category::all();
        return view('category',compact('users'));
    }

    function AddCategoryPost(Request $request){
        $request->validate([
            'category_name' =>'required|'
        ]);
        Category::insert([
            'category_name'=>$request->category_name,
            'user_id'=>Auth::user()->id,
            'created_at'=>Carbon::now(),
        ]);

        return back();
    }

    function CategoryDelete($id){

    }
}
