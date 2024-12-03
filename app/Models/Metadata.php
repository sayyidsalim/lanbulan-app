<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphTo;

class Metadata extends Model
{
    /** @use HasFactory<\Database\Factories\MetadataFactory> */
    use HasFactory;
    protected $fillable = [
        'product_color',
        'product_size',
        'image_alt',
        'image_description',
        'blog_meta_title',
        'blog_meta_description',
        'metadata_table_type',
        'metadata_table_id'
    ];
    public function metadata_table(): MorphTo
    {
        return $this->morphTo();
    }
}
