<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ContractListReport extends Model
{
    use HasFactory;
    protected $fillable = [
        'contractno',
        'tenantbuyer',
        'salesperson',
        'startdateform',
        'tostartdateform',
        'enddateform',
        'toenddateform',
        'property',
        'buildingname',
        'agentbroker',
        'contractstatus',
        'contracttype',
    ];
}
