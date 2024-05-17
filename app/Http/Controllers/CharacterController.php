<?php

namespace App\Http\Controllers;

use App\Models\Character;
use Illuminate\Http\Request;

class CharacterController extends Controller
{
    public function index()
    {

        $characters = Character::orderBy('name')->get();
        return view('guests.characters', compact('character'));
    }
}
