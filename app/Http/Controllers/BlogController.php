<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Posts;
use App\Tags;
use App\Category;

class BlogController extends Controller
{
    public function index(Posts $posts){
    	$category_widget = Category::all();
        $tags_widget = Tags::all();

    	$data = $posts->latest()->take(8)->get();
    	return view('blog',compact('data','category_widget','tags_widget'));
    }

    public function isi_blog($slug){
    	$category_widget = Category::all();
        $tags_widget = Tags::all();

    	$data = Posts::where('slug', $slug)->get();
    	return view('blog.isi_post',compact('data','category_widget','tags_widget'));
    }

    public function list_post(){
        $category_widget = Category::all();
        $tags_widget = Tags::all();

        $data = Posts::latest()->paginate(5);
        return view('blog.list_post',compact('data','category_widget','tags_widget'));
    }

     public function list_category(category $category){
        $category_widget = Category::all();
        $tags_widget = Tags::all();

        $data = $category->posts()->paginate(5);
        return view('blog.list_post',compact('data','category_widget','tags_widget'));
    }

    public function cari(Request $request){
        $category_widget = Category::all();
        $tags_widget = Tags::all();

        $data = Posts::where('judul', $request->cari)->orWhere('judul','like','%'.$request->cari.'%')->paginate(5);
        return view('blog.list_post',compact('data','category_widget','tags_widget'));
    }
}
