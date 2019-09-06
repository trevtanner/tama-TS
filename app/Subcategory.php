<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Subcategory extends Model
{

    protected $fillable = [
        'name'
    ];

    public function product()
    {
        return $this->belongsToMany(Product::class);
    }
}
