<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    public function weapon()
    {

        $weapons = Weapon::orderBy('name')->get();
        return view('guests.weapon', compact('weapons'));
    }

    public function show(Weapon $weapon)
    {
        return view('guests.show_weapon', compact('weapon'));
    }
}
