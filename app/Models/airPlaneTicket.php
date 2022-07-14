<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class airPlaneTicket extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'fullName',
        'leavingFrom',
        'leavingTo',
        'departureDate',
        'cellno',
        'numberOFChilds',
        'date',
      
    ];
}
