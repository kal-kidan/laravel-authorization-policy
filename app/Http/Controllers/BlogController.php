<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Gate;
use Illuminate\Http\Request;
use App\User;
use App\Blog;
class BlogController extends Controller
{
   public function index(Request $request){
        $blogs = Blog::all();
        $user = User::find($request->id);
        return view('blog')->with(array('blogs'=>$blogs, 'user'=>$user)); 
      // $blog = Blog::find(3);
      // if (Gate::allows('view-blog', $post)) {
      //   echo 'Allowed';
      // } else {
      //   echo 'Not Allowed';
      // }
   }
}
