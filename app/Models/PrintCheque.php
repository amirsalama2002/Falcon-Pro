<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PrintCheque extends Model
{
    use HasFactory;
    protected $fillable = [
        'printid',
        'chequeno',
        'amount',
        'chequedata',
        'tochequedata',
        'issuedata',
        'toissuedata',
        'desing',
        'payto',
        'printstatus',
        'printdateform',
        'toprintdateform',
        'company',
    ];
}
