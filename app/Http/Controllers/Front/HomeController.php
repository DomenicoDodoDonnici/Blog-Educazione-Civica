<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;

class HomeController extends Controller
{
    // Home Page
    public function index()
    {
        // Ottieni i post attivi con i dettagli (Categoria e Utente)
        $posts = Post::published()->with(['category', 'user'])->latest('created_at')->paginate(10);

        return view('front.index', compact('posts'));
    }

}
