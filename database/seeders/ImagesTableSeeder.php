<?php

namespace Database\Seeders;

use App\Models\Image;
use App\Models\Post;
use App\Models\User;
use Database\Factories\ImageFactory;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class ImagesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        //
        Image::factory(10)->create();
    }
}
