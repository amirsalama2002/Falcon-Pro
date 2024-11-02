<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertyManaqement extends Model
{
    use HasFactory;
    protected $fillable = [
        'buildingname',
        'property',
        'type',
        'model',
        'category',
        'priceform',
        'topriceform',
        'size',
        'tosize',
        'status',
        'view',
        'feature',
    ];
}
