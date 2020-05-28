<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Truck extends Model
{
    /**
     * @var string
     */
    protected $table = 'trucks';

    /**
     * @var array
     */
    protected $fillable = [
        'make_id', 'year', 'owner', 'owner_number', 'comments',
    ];
}
