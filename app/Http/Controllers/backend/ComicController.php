<?php

namespace App\Http\Controllers\backend;
use App\Models\Comic;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ComicController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $comics = Comic::All();
        return view('pages.comicsViews.index',compact('comics'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('pages.comicsViews.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {

        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'sale_date' => 'required',
        ]);


        $addComic = $request->all();

        $newComic = new Comic();
        $newComic->fill($addComic);

        $newComic->save();

        return redirect()->route('comics.show', ['comic' => $newComic->id]);
    }

    /**
     * Display the specified resource.
     */
    public function show(Comic $comic)
    {
        return view('pages.comicsViews.show',compact('comic'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Comic $comic)
    {
        return view('pages.comicsViews.edit', compact('comic'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Comic $comic)
    {

        $request->validate([
            'title' => 'required',
            'price' => 'required',
            'sale_date' => 'required',
        ]);

        $updateComic = $request->All();
        $comic->update($updateComic);
        return redirect()->route('comics.index', ['comic'=> $comic->id]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
