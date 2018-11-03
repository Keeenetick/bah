<?php

namespace App\Http\Controllers;
use App\Post;
use Illuminate\Http\Request;
use MetaTag;
class BlogController extends Controller
{
    public function index()
    {
        MetaTag::set('title', 'Блог');
        $posts = Post::all();
        return view('content.inside',['posts'=>$posts]);
    }

}
