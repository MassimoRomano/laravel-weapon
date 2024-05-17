<?php

namespace Database\Seeders;

use App\Models\Character;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CharacterSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $characters = config("characters.characters");

        foreach ($characters as $character) {
            $characters = new Character();
            $characters->name = $character['name'];
            $characters->description = $character['description'];
            $characters->attck = $character['attack'];
            $characters->defense = $character['defense'];
            $characters->speed = $character['speed'];
            $characters->save();
        }
    }
}
