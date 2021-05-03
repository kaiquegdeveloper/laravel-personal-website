<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Controllers\Controller;
use App\Models\Page;
use App\Models\Post;
use App\Models\PostCategory;
use App\Models\Configuration;
use App\Models\WorkCategory;

class BlogController extends Controller
{
  public function index()
  {
      // $configuration = Configuration::find(1);
      $posts = Post::where('published','=',1)->orderBy('created_at', 'DESC')->paginate(6);
      $postcategory = PostCategory::all();
      $categories = $postcategory->load('posts');

      return view('blog.index',[
          'posts' => $posts,
          'categories' => $categories
      ]
    //    compact('posts','categories', 'workCategories')
    );
  }

  public function show(Post $post)
  {
      // $categories = $post->load('category')->category;
      $categories = PostCategory::all();
      return view('blog.post',compact('post','categories'));
  }

  public function category(PostCategory $category)
  {
      // dd($category->posts);
      $categories = PostCategory::all();
      return view('site.blog.category.post',compact('category','categories'));
  }
}
