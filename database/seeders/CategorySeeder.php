<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Category;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Category::create([
            'nama' => 'Obat Bebas',
            'slug' => 'obat-bebas'
        ]);

        Category::create([
            'nama' => 'Obat Bebas Terbatas',
            'slug' => 'obat-bebas-terbatas'
        ]);

        Category::create([
            'nama' => 'Obat Keras',
            'slug' => 'obat-keras'
        ]);
    }
}
