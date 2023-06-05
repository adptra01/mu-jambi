<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

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
        return view('home', [
            'posts' => Post::latest()->get(),
            'categories' => Category::get(),
        ]);
    }

    public function unpublish($id)
    {
        post::whereId($id)->update([
            'status' => 0
        ]);
        return back();
    }
    public function publish($id)
    {
        post::whereId($id)->update([
            'status' => 1
        ]);
        return back();
    }

    
}
