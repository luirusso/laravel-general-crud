<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    /**
     * MASS ASSIGNMENT
     */

     protected $fillable = [
         'title',
         'slug',
         'description',
         'thumb',
         'price',
     ];
}
