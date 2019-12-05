<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['name', 'rent_price', 'list_price', 'sale_price', 'sole_price', 'profile', 'galleries', 'create-by', 'update_by'];
}
