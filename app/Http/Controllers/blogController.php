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
        $data = post::where(['userId'=>$value])->orderBy('id','desc')->get();
        return view('blog',['blogDetails'=>$data]);
    }

    function blogpost(Request $req)
    {
         if($req->session()->has('userSession'))
         {
             $post = new post;
             $post->userId = $req->session()->get('userSession')['id'];
             $post->tittle = $req->btittle;
             $post->content = $req->bcontent;

             if($req->hasfile('image'))
             {
                $file = $req->file('image');
                $extension = $file->getClientOriginalExtension();
                $filename = time().'.'.$extension;
                $file->move('uploads/',$filename);
                $post->image = $filename ;
             }

             $post->save();
             return redirect('/blog')->with('flash_success', 'Post Created successfully');;
         }
         else
         {
             return redirect('/login');
         }
     }

    function deletePost(Request $req)
    {
        $id = $req->deleteId;
        if($id){
            $result = post::where('id',$id)->delete();
            return redirect('/blog');   
        }
    }

    function editPost(Request $req)
    {
        $id = $req->editId;
        if($id){
            $result=post::where('id',$id)->first();
            return view('CreatePost',['postDetails'=>$result]);  
        }
    }

    function singlePostView($req)
    {
        $id = $req;
        $result=post::where('id',$id)->get();
        return view('singlePost',['postDetails'=>$result]);
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
