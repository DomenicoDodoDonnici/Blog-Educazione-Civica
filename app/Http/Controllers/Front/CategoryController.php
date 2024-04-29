<?php

namespace App\Http\Controllers\Front;

use App\Http\Controllers\Controller;
use App\Models\Category;

class CategoryController extends Controller
{
    // Ottieni la categoria per il suo slug
    public function getCategoryBySlug($slug)
    {
        // Ottieni i post attivi solo nella categoria corrente
        $category = Category::whereSlug($slug)->firstOrFail();
        $posts = $category->publishedPosts();
        $category_name = $category->name;

        return view('front.category', compact('posts', 'category_name'));
    }
}
