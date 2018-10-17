<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests;
use Mail;
use Session;
class MainController extends Controller
{
    public function index()
    {
        return view('mainpage.index');
    }

   
    
}
