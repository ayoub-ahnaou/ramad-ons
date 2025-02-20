<?php

namespace App\Http\Controllers;

use App\Models\Recipe;
use Illuminate\Http\Request;

class RecipeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $query = Recipe::query();
        if($request->filled('category')) {
            $query->where('category', $request->category);
        }

        $recipes = $query->orderBy('created_at', 'desc')->paginate(6)->appends(['category' => $request->category]);

        return view("recipes.index", compact('recipes'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("recipes.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['required', 'string', 'max:100'],
            'description' => ['required', 'string'],
            'ingredients' => ['required', 'string'],
            'persons' => ['required', 'integer'],
            'time' => ['required', 'date_format:H:i'],
            'category' => ['required', 'string'],
            'image' => ['required', 'image'],
        ]);
        
        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imagePath = $image->store('images', 'public'); // 'images' is the folder, 'public' is the disk
            $data['image'] = $imagePath;

            Recipe::create($data);
        }
        return to_route('recipes.index')->with('message', 'Recipe created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $recipe = Recipe::query()->find($id);
        return view("recipes.show", compact("recipe"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Recipe $recipe)
    {
        return view("recipes.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Recipe $recipe)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Recipe $recipe)
    {
        //
    }
}
