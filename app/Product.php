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
        'index_image',
        'main_image',
        'image',
        'supplier_id',
        'tag_id',
        'subcategory_id',
        'productnumber',
    ];

    public function supplier()
    {
        return $this->belongsTo(Supplier::class);
    }

    public function tag()
    {
        return $this->belongsTo(Tag::class);
    }

    public function sizes()
    {
        return $this->belongsToMany(Size::class);
    }

    public function colors()
    {
        return $this->belongsToMany(Color::class);
    }

    public function subcategory()
    {
        return $this->belongsTo(Subcategory::class);
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
