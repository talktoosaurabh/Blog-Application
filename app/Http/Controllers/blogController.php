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

             $image=$req->bimage;
             print_r($image);

             if(isset($image)){
                echo "i am here";
                  $errors= array();
                  $file_name = $_FILES[$image]['name'];
                  $file_size =$_FILES[$image]['size'];
                  $file_tmp =$_FILES[$image]['tmp_name'];
                  $file_type=$_FILES[$image]['type'];
                  $file_ext=strtolower(end(explode('.',$_FILES['image']['name'])));
                  
                  $extensions= array("jpeg","jpg","png");
                  
                  if(in_array($file_ext,$extensions)=== false){
                     $errors[]="extension not allowed, please choose a JPEG or PNG file.";
                  }
                  if(empty($errors)==true){
                     move_uploaded_file($file_tmp,"uploads/".$file_name);
                     echo "Success";
                  }else{
                     print_r($errors);
                  }
               }
             exit;
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
