<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ProductPriceHistory extends Model
{
    protected $fillable = ['product_id', 'rent_price', 'sale_price', 'list_price', 'sold_price'];
}
 