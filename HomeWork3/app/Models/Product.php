<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
// use App\Models\ProductType;
// use App\Models\ProductStatus;
// use App\Models\Shape;
// use App\Models\Zone;

class Product extends Model
{
    protected $fillable = ['name', 'code', 'product_type_id', 'product_status_id', 'zone_id', 
    'shape_id', 'rent_price', 'sale_price', 'list_price', 'sold_price', 'created_by', 'updated_by'];

    public function getRentPriceFormatAttribute()
    {
        return '$' . number_format($this->rent_price);
    }

    public function getSalePriceFormatAttribute()
    {
        return '$' . number_format($this->sale_price);
    }

    public function getListPriceFormatAttribute()
    {
        return '$' . number_format($this->list_price);
    }
    
    public function getSoldPriceFormatAttribute()
    {
        return '$' . number_format($this->sold_price);
    }

    public function product_type()
    {
        return $this->belongsTo(\App\Models\ProductType::class, 'product_type_id');
    }

    public function product_status()
    {
        return $this->belongsTo(\App\Models\ProductStatus::class, 'product_status_id');
    }
    
    public function shape()
    {
        return $this->belongsTo(\App\Models\Shape::class, 'shape_id');
    }

    public function zone()
    {
        return $this->belongsTo(\App\Models\Zone::class, 'zone_id');
    }
    
    public function productPriceHistory()
    {
        return $this->hasMany(\App\Models\ProductPriceHistory::class, 'product_id');
    }

}
