<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\PostTranslation;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index() : View
    {
        return view('index',[
            'posts' => Post::get(),
        ]);
    }
}