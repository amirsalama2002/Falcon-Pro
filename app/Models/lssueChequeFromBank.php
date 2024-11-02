<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class lssueChequeFromBank extends Model
{
    use HasFactory;
    protected $fillable = [
        'printid',
        'chequeno',
        'amount',
        'chequedate',
        'tochequedate',
        'issuedate',
        'toissuedate',
        'desing',
        'payto',
        'printstatus',
        'printdatefrom',
        'toprintdatefrom',
        'company',
    ];

}
