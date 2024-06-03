<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;
use App\Http\Requests\StoreCharacterRequest;
use App\Http\Requests\UpdateCharacterRequest;

class CharacterController extends Controller
{

    /**
     * Display a listing of the resource.
     */
    /* public function index()
    {
        $characters = Character::orderBy('name')->get();
        return view('guests.characters', compact('characters'));
    } */

    public function characters()
    {
        $characters = Character::orderBy('name')->get();
        return view('guests.characters', compact('characters'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view("characters.create");
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(StoreCharacterRequest $request)
    {
        $val_data = $request->validated();


        Character::create($val_data);

        return to_route('characters.create');
    }

    /**
     * Display the specified resource.
     */
    public function show(Character $character)
    {
        return view('guests.show_character', compact('character'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateCharacterRequest $request, character $character)
    {
        $val_data = $request->validated();

        $character->update($val_data);

        return to_route('guests.show_character');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
