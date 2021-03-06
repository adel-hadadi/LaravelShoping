<?php

namespace App\Models\Market;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Product extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name'
            ]
        ];
    }
    protected $casts = ['image' => 'array'];

    protected $fillable = ['name',  'introduction', 'slug', 'status', 'tags', 'length', 'slug', 'image', 'weight',
     'width', 'height', 'price', 'marketable', 'sold_number', 'frozen_number', 'marketable_number', 'brand_id',
      'category_id', 'published_at'];

    public function category() {
        return $this->belongsTo(ProductCategory::class, 'category_id');
    }

    public function brand() {
        return $this->belongsTo(Brand::class);
    }

    public function metas(){
        return $this->hasMany(ProductMeta::class);
    }
}
