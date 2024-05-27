<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Comic;

class ComicController extends Controller
{
    public function index(Request $request)
    {
        // Verifichiamo se è stata effettuata una ricerca
        if ($request->has('search')) {
            $search = $request->input('search');
            $comics = Comic::where('title', 'like', '%' . $search . '%')->get();
        } else {
            // Altrimenti otteniamo tutti i fumetti
            $comics = Comic::all();
        }

        // Passiamo i fumetti alla vista
        return view('comics.index', compact('comics'));
    }

    public function create()
    {
        return view('comics.create');
    }

    public function store(Request $request)
    {
        // Validiamo i dati inviati dal form
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url',
            'price' => 'nullable|string|max:20',
            'series' => 'nullable|string|max:100',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|string|max:50',
        ]);

        // Creiamo un nuovo fumetto con i dati validati
        $comic = Comic::create($validatedData);

        // Reindirizziamo l'utente alla pagina di index dei fumetti
        return redirect()->route('comics.index');
    }

    public function show(Comic $comic)
    {
        return view('comics.show', compact('comic'));
    }

    public function edit(Comic $comic)
    {
        return view('comics.edit', compact('comic'));
    }

    public function update(Request $request, Comic $comic)
    {
        $validatedData = $request->validate([
            'title' => 'required|string|max:255',
            'description' => 'nullable|string',
            'thumb' => 'nullable|url',
            'price' => 'nullable|string|max:20',
            'series' => 'nullable|string|max:100',
            'sale_date' => 'nullable|date',
            'type' => 'nullable|string|max:50',
        ]);

        $comic->update($validatedData);

        return redirect()->route('comics.index');
    }

    public function destroy(Comic $comic)
    {
        $comic->delete();
        return redirect()->route('comics.index');
    }
}
