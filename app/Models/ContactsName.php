<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContactsName extends Model
{
    use HasFactory;
    protected $fillable = [
        'contractno',
        'tenantbuyer',
        'salesperson',
        'startdatefrom',
        'tostartdatefrom',
        'enddatefrom',
        'toenddatefrom',
        'property',
        'buildingname',
        'agentbroker',
        'contractstatus',
        'contracttype',
    ];
}