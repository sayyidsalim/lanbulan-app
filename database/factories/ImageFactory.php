<?php

namespace Database\Factories;

use App\Models\User;
use App\Models\Post;
use App\Models\Image;
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
        $imageable = $this->faker->randomElement([
            ['id' => User::inRandomOrder()->first()->id, 'type' => 'App\Models\User'],
            // Ambil Product secara acak
            ['id' => Post::inRandomOrder()->first()->id, 'type' => 'App\Models\Product'],
        ]);
        return [
            //
            "entity_type"=> "content",
            'imageable_id' => $imageable['id'],
            'imageable_type' => $imageable['type'],
            'image_path' => $this->faker->imageUrl(640, 480, 'animals')  // Gambar dummy
        ];
    }
}
