<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\BelongsTo;
use Illuminate\Database\Eloquent\Relations\HasOne;

class Wishlist extends Model
{
    use HasFactory;

    protected $fillable = [
        "image",
        "name",
        "link",
        "expires_at",
        "category_id"
    ];

    public function category(): HasOne
    {
        return $this->hasOne(Category::class, "id", "category_id");
    }

}
