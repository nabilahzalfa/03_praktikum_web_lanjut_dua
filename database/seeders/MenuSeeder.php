<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MenuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('menu')->insert(
        [
            [
                'nama' => 'Americano',
                'stok' => 10,
                'harga' => 13,
                'deskripsi' => 
                'Americano dibuat dari campuran espresso berkualitas yang diseduh dan ditambahkan dengan air',
                'gambar' => 'asset/img/americano-1.jpg'
            ],[
                'nama' => 'Cappuccino',
                'stok' => 15,
                'harga' => 20,
                'deskripsi' => 
                'Cappucino dibuat dari campuran espresso berkualitas dengan susu segar, dibuat dengan foam lembut',
                'gambar' => 'asset/img/cappuccino-1.jpg'
            ],[
                'nama' => 'Mocha',
                'stok' => 9,
                'harga' => 23,
                'deskripsi' => 
                'Mocha dibuat dari campuran espresso berkualitas dengan coklat belgia dan susu segar',
                'gambar' => 'asset/img/mocha-1.png'
            ],[
                'nama' => 'Salted caramel mocha',
                'stok' => 5,
                'harga' => 30,
                'deskripsi' => 
                'Mocha nikmat dengan Salted Caramel yang gurih',
                'gambar' => 'asset/img/salted-caramel.jpg'
            ],[
                'nama' => 'Berry pavlova',
                'stok' => 5,
                'harga' => 45,
                'deskripsi' => 
                'Crunchy diluar dan lembut di dalam dengan manisnya berry',
                'gambar' => 'asset/img/Pavlova-1.jpg'
            ],[
                'nama' => 'Almond croissant',
                'stok' => 12,
                'harga' => 28,
                'deskripsi' => 
                'Croissant lembut dan berlayer dengan Crunchy Almond di luar',
                'gambar' => 'asset/img/almond-croissant-1.png'
            ],[
                'nama' => 'Prwan aglio e olio',
                'stok' => 4,
                'harga' => 50,
                'deskripsi' => 
                'Spagetti gurih dengan tambahan udang yang kenyal',
                'gambar' => 'asset/img/prawn-aglio-1.png'
            ],[
                'nama' => 'Chamomile tea',
                'stok' => 8,
                'harga' => 17,
                'deskripsi' => 
                'Teh herbal dari bunga chamomile yang berguna untuk mengatasi insomnia',
                'gambar' => 'asset/img/camomile-tea.jpg'
            ],[
                'nama' => 'Pea tea butterfly',
                'stok' => 10,
                'harga' => 19,
                'deskripsi' => 
                'Teh bunga telang yang dapat membuat suasana hati yang seimbang',
                'gambar' => 'asset/img/pea-tea-butterfly.jpg'
            ],[
                'nama' => 'Blended coffe',
                'stok' => 18,
                'harga' => 25,
                'deskripsi' => 
                'Blend coffee adalah kopi yang terdiri dari beberapa campuran jenis kopi, baik kopi arabika maupun kopi robusta',
                'gambar' => 'asset/img/menu4.jpg'
            ],[
                'nama' => 'Blended Cream',
                'stok' => 18,
                'harga' => 25,
                'deskripsi' => 
                'Blend Cream adalah minuman coklat Belgia dengan susu segar, serta cream lembut di atasnya',
                'gambar' => 'asset/img/menu5.jpg'
            ]
        ]);
    }
}
