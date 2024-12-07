<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsToMany;
use Illuminate\Database\Eloquent\Relations\MorphMany;

class Product extends Model
{
    /** @use HasFactory<\Database\Factories\ProductFactory> */
    use HasFactory;

    protected $fillable = ["title", "description", "stock_quantity", "user_id", "price"];
    public function metadata(): MorphMany
    {
        return $this->morphMany(Metadata::class, "metadata_table");
    }
    public function orders(): BelongsToMany
    {
        return $this->belongsToMany(Order::class);
    }
}
