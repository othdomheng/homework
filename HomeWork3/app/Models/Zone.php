<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Zone extends Model
{
    protected $fillable = ['id', 'name', 'created_by', 'updated_by'];

    public function getIdFormatAttribute()
    {
        return '00' . $this->id;
    }
}
