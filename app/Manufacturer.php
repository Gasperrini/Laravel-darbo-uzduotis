<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    /**
     * @var string
     */
    protected $table = 'manufacturers';

    /**
     * @var array
     */
    protected $fillable = [
        'manufacturer', 
    ];
}
