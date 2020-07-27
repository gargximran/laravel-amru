<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subcategory;
class Category extends Model
{
     public function subcategories()
    {
        return $this->hasMany(Subcategory::class, 'cat_slug','category_slug');
    }
}
