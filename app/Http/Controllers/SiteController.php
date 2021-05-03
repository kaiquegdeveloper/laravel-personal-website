<?php

namespace App\Http\Controllers;

use App\Mail\ContactMail;
use App\Models\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class SiteController extends Controller
{
    public function sendEmail(Request $request){
        $data = $request->all();
        Mail::send(new ContactMail($data));
        return redirect('/#contact')->with('success', "Mensagem enviada com sucesso!");
    }
    public function index(Request $request)
    {
      // $configuration = Configuration::find(1);
      $posts = Post::where('published','=',1)->orderBy('created_at', 'DESC')->limit(3)->get();
      //   $postcategory = PostCategory::all();
      //   $categories = $postcategory->load('posts');
      return view('index_production',[
          'posts' => $posts
        //   'categories' => $categories
      ]);
    }
}
