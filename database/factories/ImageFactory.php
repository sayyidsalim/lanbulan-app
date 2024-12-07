<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
use App\Models\Image;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Image>
 */
class ImageFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Image::class;
    public function definition(): array
    {
        // $imageable = $this->faker->randomElement([
        //     ['id' => User::inRandomOrder()->first()->id, 'type' => 'App\Models\User'],
        //     // Ambil Product secara acak
        //     ['id' => Post::inRandomOrder()->first()->id, 'type' => 'App\Models\Product'],
        //     ['id' => Product::inRandomOrder()->first()->id, 'type' => 'App\Models\Post'],
        // ]);
        return [
            //
            "entity_type" => "content",
            'imageable_id' => Post::factory(), //$imageable['id'],
            'imageable_type' => "App\Models\Post", //$imageable['type'],
            'image_path' => "https://placehold.co/600x400"  // Gambar dummy
        ];
    }
}
