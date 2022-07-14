<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class carRental extends Model
{
    use HasFactory;
    protected $fillable = [
       
        'fullName',
        'leavingFrom',
        'leavingTo',
        'departureDate',
        'cellno',
        'vehicle',
        'date',
      
    ];
}
