<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
//use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;
use MongoDB\Laravel\Eloquent\Model;

class Categories extends Model
{
    protected $connection = "mongodb";

    protected $fillable = [
        'name_categories',
        'slug_categories'
    ];

    static function newCategories($new_categories)
    {
        return Categories::create([
            'name_categories' => $new_categories,
            'slug_categories' => Str::slug($new_categories)
        ]);
    }

    static function getAllCategories()
    {
        return Categories::all();
    }


    static function getCategoriesById($categories_id)
    {
        return Categories::find($categories_id);
    }

    static function updateCategoriesById($categories_id, $new_categories)
    {
        return Categories::find($categories_id)
            ->update([
                'name_categories' => $new_categories,
                'slug_categories' => Str::slug($new_categories)
            ]);
    }
}
