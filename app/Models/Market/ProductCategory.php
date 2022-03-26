<?php

namespace App\Models\Market;

use Cviebrock\EloquentSluggable\Sluggable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class ProductCategory extends Model
{
    use HasFactory, SoftDeletes, Sluggable;

    public function sluggable(): array
    {
        return [
            'slug' => [
                'source' => 'name
                '
            ]
        ];
    }
    protected $casts = ['img' => 'array'];

    protected $fillable = ['name',  'description', 'slug', 'status', 'tags', 'show_in_menu', 'slug', 'img', 'parent_id'];

    public function parent() {
        return $this->belongsTo($this, 'parent_id')->with('parent');
    }

    public function children() {
        return $this->hasMany($this, 'parent_id')->with('children');
    }

    public function products(){
        return $this->hasMany(Product::class);
    }
}
