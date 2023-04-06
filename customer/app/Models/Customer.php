<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Customer extends Model
{
    use HasFactory;

    // option 1
    // protected $fillable = ['name','email'];

    // option 2
    protected $guarded =[];
}
