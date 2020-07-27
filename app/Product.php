<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use App\Subcategory;
class Product extends Model
{
        public function productsubcategories(){
        return $this->belongsTo(Subcategory::class,'sub_cat_id','sub_slug');
     }
}
