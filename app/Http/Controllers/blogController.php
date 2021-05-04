<?php

namespace App\Http\Controllers;
use App\Models\post;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;

class blogController extends Controller
{
    function index()
    {
        $value = session()->get('userSession')['id'];
        $data=post::where(['userId'=>$value])->orderBy('id','desc')->get();
        return view('blog',['blogDetails'=>$data]);
    }

    function blogpost(Request $req)
    {
         if($req->session()->has('userSession'))
         {
             $post = new post;
             $post->userId=$req->session()->get('userSession')['id'];
             $post->tittle=$req->btittle;
             $post->image=$req->bimage;
             $post->content=$req->bcontent;
             $post->save();
             return redirect('/blog');
         }
         else
         {
             return redirect('/login');
         }
     }
}
