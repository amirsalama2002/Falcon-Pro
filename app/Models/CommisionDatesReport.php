<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class CommisionDatesReport extends Model
{
    use HasFactory;
    protected $fillable = [
        'dateform',
        'todateform',
        'salesperon',
        'contracttype',
        'broker',
        'reporttype',
    ];
}
