<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('product')->insert([
            'name' => 'LG Mobile',
            'price' => '200',
            'description' => 'A smartphone',
            'category' => 'Mobile',
            'gallery' => 'https://www.lg.com/us/images/cell-phones/md07507317/gallery/desktop-01.jpg'
        ],
        [
            'name' => 'Nokia Mobile',
            'price' => '400',
            'description' => 'A undestructable phone',
            'category' => 'Mobile',
            'gallery' => 'https://images.ctfassets.net/wcfotm6rrl7u/2uRIDMY0mMHEtKXnTHid3B/9e5dfaccc1999c4ae5a7c8bfaccf728f/nokia-XR20-ultrablue-front_back-int.png'
        ],
        [
            'name' => 'BlackBerry Mobile',
            'price' => '300',
            'description' => 'A phone',
            'category' => 'Mobile',
            'gallery' => 'https://tweakers.net/ext/i/1283433340.jpeg'
        ]);
    }
}
