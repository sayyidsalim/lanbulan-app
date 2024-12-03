<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

class Image extends Model
{
    //
    use HasFactory;
    protected $fillable = ["entity_type", "imageable_type", "imageable_id", "image_path"];
    public function imageable()
    {
        return $this->morphTo();
    }
    public function metadata(): MorphOne
    {
        return $this->morphOne(Metadata::class, "metadata_table");
    }
}
