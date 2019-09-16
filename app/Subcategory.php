<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{

    protected $fillable = [
        'name'
    ];

    public function products()
    {
        return $this->HasMany(Product::class);
    }
}
