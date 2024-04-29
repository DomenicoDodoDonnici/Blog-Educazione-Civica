<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Post;
use Illuminate\Support\Facades\Cookie;

class PostController extends Controller
{
    // Ottieni il post per il suo slug
    public function getPostBySlug($slug)
    {
        // Passa lo slug per ottenere la categoria per il suo slug
        $post = Post::with(['category', 'user', 'comments.user'])
        ->whereStatus(true)->whereSlug($slug)->firstOrFail();

        $comments = $post->comments;
        $post_title = $post->title;

        if (!Cookie::get('post_viewed_' . $post->id)) {
            // Aggiorna le visualizzazioni del post
            $post->increment('views');
            // Crea un cookie e impostalo per 1 giorno
            Cookie::queue('post_viewed_' . $post->id, true, 60 * 24);
        }

        return view('front.post', compact('post', 'post_title', 'comments'));
    }

}
