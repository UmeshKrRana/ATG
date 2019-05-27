<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class ATG extends Model
{
    protected $table   = "atgs";

    protected $fillable = [
        'name', 'email', 'pincode'
    ];
}
