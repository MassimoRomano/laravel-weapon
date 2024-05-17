<?php

namespace App\Http\Controllers;

use App\Models\Weapon;
use Illuminate\Http\Request;

class WeaponController extends Controller
{
    public function index(){
        
        $weapons = Weapon::orderBy('name')->get();
        return view('guests.home', compact('weapons'));
    }
}
