<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //protected $table = 'categories';

    protected $fillable = ['name','status'];

     public function product()
    {
        return $this->belongsToMany(Product::class);
    }


}
