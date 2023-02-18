<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Keluhan;


class KeluhanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Keluhan::create([
            'nama' => 'Mual',
            'slug' => 'mual'
        ]);

        Keluhan::create([
            'nama' => 'Batuk',
            'slug' => 'batuk'
        ]);

        Keluhan::create([
            'nama' => 'Pilek',
            'slug' => 'pilek'
        ]);

        Keluhan::create([
            'nama' => 'Meriang',
            'slug' => 'meriang'
        ]);

        Keluhan::create([
            'nama' => 'Gatal-Gatal',
            'slug' => 'gatal-gatal'
        ]);
    }
}
