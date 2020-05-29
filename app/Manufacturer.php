<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Manufacturer extends Model
{
    /**
     * @var string
     */
    protected $table = 'manufacturers';
    
    public function trucks(){
        return $this->hasMany(Truck::class, 'make_id');
    }
}
