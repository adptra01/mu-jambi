<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required|min:5',
            'category_id' => 'required',
            'body'=> 'required|min:5',
        ]);

        Post::create([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'body'=> $request->body,
            'status' => 0
        ]);
        return back();
    }

    public function show($id)
    {
        return view('show', [
            'post' => Post::whereId($id)->first(),
            'categories' => Category::get()
        ]);
    }

    public function update(Request $request, $id)
    {
        Post::whereId($id)->update([
            'title' => $request->title,
            'category_id' => $request->category_id,
            'body'=> $request->body,
            'status' => $request->status
        ]);
        return back();
    }

    public function destroy($id)
    {
        Post::whereId($id)->delete();
        return back();
    }
}
