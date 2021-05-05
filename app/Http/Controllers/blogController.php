<?php

namespace App\Http\Controllers;

use App\Models\post;
use Symfony\Component\HttpFoundation\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\Mail\contactSupport;

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

    public function support(Request $req)
    {
      $details=[
        'name'=>$req->fname,
        'email'=>$req->femail,
        'subject'=>$req->fsubject,
        'message'=>$req->fmessage
      ];

      Mail::to('contactsaurabhsngh@gmail.com')->send(new contactSupport($details));

      return "Email Sent";

    }
}
