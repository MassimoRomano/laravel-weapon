<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function characters()
    {
        $characters = Character::orderBy('name')->get();
        return view('guests.characters', compact('characters'));
    }

    public function show(Character $character)
    {
        return view('guests.show_character', compact('character'));
    }
}
