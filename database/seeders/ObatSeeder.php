<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Obat;

class ObatSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Obat::create([
            'nama' => 'Amoxicillin',
            'category_id' => 2,
            'slug' => 'amoxicillin',
            'harga' => 15000,
            'stok' => 200,
            'image' => 'obats/amoxicillin.jpg'
        ]);
        Obat::create([
            'nama' => 'Aceton Gadjah 50ml (per Botol)',
            'category_id' => 1,
            'slug' => 'aceton-gadjah-50ml-(per botol)',
            'harga' => 10633,
            'stok' => 100,
            'image' => 'obats/aceton-gadjah-50ml-(per botol).jpg'
        ]);
        Obat::create([
            'nama' => 'Kalpanax',
            'category_id' => 1,
            'slug' => 'kalpanax',
            'harga' => 15000,
            'stok' => 60,
            'image' => 'obats/kalpanax.jpg'
        ]);
        Obat::create([
            'nama' => 'Obat Alergi CTM',
            'category_id' => 2,
            'slug' => 'obat-alergi-ctm',
            'harga' => 20000,
            'stok' => 50,
            'image' => 'obats/obat-alergi-ctm.jpg'

        ]);
        Obat::create([
            'nama' => 'Decolgen',
            'category_id' => 2,
            'slug' => 'decolgen',
            'harga' => 5000,
            'stok' => 45,
            'image' => 'obats/decolgen.jpg'
        ]);
        Obat::create([
            'nama' => 'Molexflu',
            'category_id' => 2,
            'slug' => 'molexflu',
            'harga' => 3500,
            'stok' => 100,
            'image' => 'obats/molexflu.jpg'
        ]);
        Obat::create([
            'nama' => 'Ennamax',
            'category_id' => 2,
            'slug' => 'ennamax',
            'harga' => 10000,
            'stok' => 50,
            'image' => 'obats/ennamax.jpg'
        ]);
        Obat::create([
            'nama' => 'Astifen',
            'category_id' => 2,
            'slug' => 'astifen',
            'harga' => 3500,
            'stok' => 20,
            'image' => 'obats/astifen.jpg'
        ]);
        Obat::create([
            'nama' => 'Komix Jahe',
            'category_id' => 1,
            'slug' => 'komix-jahe',
            'harga' => 5200,
            'stok' => 43,
            'image' => 'obats/komix-jahe.jpg'
        ]);
        Obat::create([
            'nama' => 'Imboost Kids Sirup',
            'category_id' => 1,
            'slug' => 'imboost-kids-sirup',
            'harga' => 20000,
            'stok' => 150,
            'image' => 'obats/imboost-kids-sirup.jpg'
        ]);
        Obat::create([
            'nama' => 'Stimuno Forte',
            'category_id' => 1,
            'slug' => 'stimuno-forte',
            'harga' => 25000,
            'stok' => 350,
            'image' => 'obats/stimuno-forte.jpg'
        ]);
        Obat::create([
            'nama' => 'Bestalin',
            'category_id' => 2,
            'slug' => 'bestalin',
            'harga' => 4700,
            'stok' => 171,
            'image' => 'obats/bestalin.jpg'
        ]);
        Obat::create([
            'nama' => 'Oradex Dual Action',
            'category_id' => 2,
            'slug' => 'oradex-dual-action',
            'harga' => 57000,
            'stok' => 157,
            'image' => 'obats/oradex-dual-action.jpg'
        ]);
        Obat::create([
            'nama' => 'Siladex Cough',
            'category_id' => 2,
            'slug' => 'siladex-cough',
            'harga' => 33000,
            'stok' => 230,
            'image' => 'obats/siladex-cough.jpg'
        ]);
        Obat::create([
            'nama' => 'Komix Jeruk Nipis',
            'category_id' => 1,
            'slug' => 'komix-jeruk-nipis',
            'harga' => 6500,
            'stok' => 270,
            'image' => 'obats/komix-jeruk-nipis.jpg'
        ]);
        Obat::create([
            'nama' => 'Imboost',
            'category_id' => 1,
            'slug' => 'imboost',
            'harga' => 7500,
            'stok' => 180,
            'image' => 'obats/imboost.jpg'
        ]);
        Obat::create([
            'nama' => 'Promag',
            'category_id' => 1,
            'slug' => 'promag',
            'harga' => 5000,
            'stok' => 170,
            'image' => 'obats/promag.jpg'
        ]);
    }
}
