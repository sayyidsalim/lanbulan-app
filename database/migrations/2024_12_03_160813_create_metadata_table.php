<?php

use App\Models\Product;
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('metadata', function (Blueprint $table) {
            $table->id()->autoIncrement();
            $table->string("product_color")->nullable();
            $table->string("product_size")->nullable();
            $table->string("image_alt")->nullable();
            $table->string("image_description")->nullable();
            $table->string("blog_meta_title")->nullable();
            $table->string("blog_meta_description")->nullable();
            $table->morphs("metadata_table");
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('metadata');
    }
};
