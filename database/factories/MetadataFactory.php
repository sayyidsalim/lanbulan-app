<?php

namespace Database\Factories;

use App\Models\Image;
use App\Models\Post;
use App\Models\Product;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Metadata>
 */
class MetadataFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $type = fake()->randomElement(["product", "blog", "image"]);
        $data = [];

        switch ($type) {
            case 'product':
                $data = [
                    'product_color' => $this->faker->colorName,
                    'product_size' => $this->faker->randomElement(['S', 'M', 'L', 'XL']),
                    'image_alt' => null,
                    'image_description' => null,
                    'blog_meta_title' => null,
                    'blog_meta_description' => null,
                    'metadata_table_type' => 'product',
                    'metadata_table_id' => Product::factory(),
                ];
                break;
            case 'image':
                $data = [
                    'product_color' => null,
                    'product_size' => null,
                    'image_alt' => $this->faker->word,
                    'image_description' => $this->faker->sentence,
                    'blog_meta_title' => null,
                    'blog_meta_description' => null,
                    'metadata_table_type' => 'image',
                    'metadata_table_id' => Image::factory(),
                ];
                break;
            case 'blog':
                $data = [
                    'product_color' => null,
                    'product_size' => null,
                    'image_alt' => null,
                    'image_description' => null,
                    'blog_meta_title' => $this->faker->sentence,
                    'blog_meta_description' => $this->faker->paragraph,
                    'metadata_table_type' => 'blog',
                    'metadata_table_id' => Post::factory(),
                ];
                break;
        }

        return $data;
    }
}
