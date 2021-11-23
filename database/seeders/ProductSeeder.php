<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Product::create([
            'produk' => 'apajalah',
            'deskripsi' => 'bismillah',
            'stock' => 1616,
            'harga' => 1717,
            'kategori_id' => 1
        ]);
    }
}
