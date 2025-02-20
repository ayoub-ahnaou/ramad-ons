<?php

namespace App\Http\Controllers;

use App\Models\Comment;
use App\Models\Publication;
use Illuminate\Http\Request;
use Symfony\Component\VarDumper\VarDumper;

class PublicationController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $publications = Publication::query()->orderBy('created_at', 'desc')->get();
        return view("publications.index", compact("publications"));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("publications.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $data = $request->validate([
            'title' => ['string', 'required', 'max:50'],
            'content' => ['string', 'required'],
            'image' => ['required', 'image', 'mimes:jpeg,png,jpg,gif', 'max:2048']
        ]);

        if ($request->hasFile('image')) {
            $image = $request->file('image');

            $imagePath = $image->store('images', 'public'); // 'images' is the folder, 'public' is the disk
            $data['image'] = $imagePath;

            Publication::create($data);

        }
        return to_route('publications.index')->with('message', 'Publications created successfully!');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $publication = Publication::query()->find($id);
        $comments = Comment::where('publication_id', $id)->orderBy('created_at', 'desc')->get();
        return view("publications.show", compact("publication", "comments"));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        return view("publications.edit");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Publication $publication)
    {
        // 
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Publication $publication)
    {
        $publication->delete();
        return to_route('publications.index')->with('message', 'Publication deleted succefully');
    }
}
