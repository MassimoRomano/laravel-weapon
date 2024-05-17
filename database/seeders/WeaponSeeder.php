<?php

namespace Database\Seeders;

use App\Models\Weapon;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class WeaponSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $weapons = config("weapons.items");

        foreach ($weapons as $weapon) {
            $weapons = new Weapon();
            $weapons->type = $weapon['type'];
            $weapons->name = $weapon['name'];
            $weapons->category = $weapon['category'];
            $weapons->weight = $weapon['weight'];
            $weapons->cost = $weapon['cost'];
            $weapons->damage_dice = $weapon['damage_dice'];
            $weapons->save();
        }
    }
}
