<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphMany;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Post extends Model
{
    //
    use HasFactory;
    protected $table = "blogs";
    protected $fillable = ["title", "content", "user_id"];
    public function images(): MorphMany
    {
        return $this->morphMany(Image::class, "imageable");
    }

    public function metadata(): MorphOne
    {
        return $this->morphOne(Metadata::class, "metadata_table");
    }
}
