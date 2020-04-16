<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Intervention\Image\ImageManagerStatic as Image;
use App\Post;
use Illuminate\Support\Str;

class PostController extends Controller
{
    public function index(){
        $image=Post::all();

        return view('index',compact('image'));
      }

      public function store(Request $request){
        $request->validate([
           'image'=>'required|image|mimes:jpg,jpeg,png|max:2000'
       ]);

       $random_str = Str::random(100);
       $file=$request->file('image');
       $fileName=$random_str.'.'.$file->getClientOriginalExtension();
       Image::make($file)->save(public_path('images/'.$fileName));
       $post=new Post;
       $post->image=$fileName;
       $post->save();

       return redirect()->back();
}
}
