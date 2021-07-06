<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class  Product extends Model
{
    use HasFactory;

    public function category()
    {
        return $this->belongsTo('App\Models\Category','cat_id');
    }

    public function specifications()
    {
        return $this->hasMany(Specification::class,'product_id');
    }

    public function descriptions()
    {
        return $this->hasMany(Description::class,'product_id');
    }
}
