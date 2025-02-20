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
        $nbrePublications = Publication::query()->count();
        $nbreRecipes = Recipe::query()->count();
        return view("welcome", compact("topThreeRecipes", "topThreePublications", "nbrePublications", "nbreRecipes"));
    }
}
