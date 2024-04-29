<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Page;

class PageController extends Controller
{
    // Ottieni la pagina per il suo slug
    public function getPageBySlug($slug)
    {
        // Passa lo slug per ottenere la pagina per il suo slug
        $page = Page::whereSlug($slug)->firstOrFail();

        return view('front.page', compact('page'));
    }
}
