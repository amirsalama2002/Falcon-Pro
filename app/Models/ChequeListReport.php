<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ChequeListReport extends Model
{
    use HasFactory;
    protected $fillable = [
        'printid',
        'chequeno',
        'amount',
        'chequedate',
        'tochequedate',
        'issuedate',
        'toissuedata',
        'desing',
        'payto',
        'printstatus',
        'printdateform',
        'toprintdateform',
        'companty',
    ];
}
