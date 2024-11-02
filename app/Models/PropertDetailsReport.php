<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PropertDetailsReport extends Model
{
    use HasFactory;
    protected $fillable = [
        'buildingname',
        'propeerty',
        'type',
        'model',
        'category',
        'priceform',
        'topriceform',
        'size',
        'tosize',
        'status',
        'view',
        'feature'
    ];
}
