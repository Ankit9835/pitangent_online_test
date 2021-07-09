<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Product;
use App\Models\Comment;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {
        $products = Product::paginate(20);
        return view('home',compact('products'));
    }

    public function viewComments($id){
        $comment = Comment::where('product_id', $id)->get();
       // dd($comment);
        return view('comment',compact('comment'));
    }
}
