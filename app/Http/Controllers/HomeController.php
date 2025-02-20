<?php

namespace App\Http\Controllers;

use App\Models\Publication;
use App\Models\Recipe;

class HomeController extends Controller
{
    public function welcome()
    {
        $topThreeRecipes = Recipe::query()->orderBy("created_at", 'desc')->limit(3)->get();
        $topThreePublications = Publication::query()->orderBy("created_at", 'desc')->limit(3)->get();
        return view("welcome", compact("topThreeRecipes", "topThreePublications"));
    }
}
