<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use App\Post;
use Session;
use MetaTag;
class MainController extends Controller
{
    public function index()
    {
        MetaTag::set('title', 'Главная');
        MetaTag::set('description', 'Покраска в Киеве');
        $posts = Post::all();
        return view('mainpage.index',['posts'=>$posts]);
    }

   
    
}
