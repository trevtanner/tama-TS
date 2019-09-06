<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\Storage;

class Product extends Model
{
    protected $fillable = [
        'title',
        'shortdescript',
        'longdescript',
        'image',
        'supplier_id',
        'productnumber',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function tags()
    {
        return $this->belongsToMany(Tag::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function subcategories()
    {
        return $this->belongsToMany(Subcategory::class);
    }

    /**

     * Delete post image from storage

     *

     * @return void

     */
    public function deleteImage()
    {
        Storage::deleted($this->image);
    }

}
