<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Manufacturer extends Model
{
    use Sortable;
    
    /**
     * @var string
     */
    protected $table = 'manufacturers';
    
    public function trucks(){
        return $this->hasMany(Truck::class, 'make_id');
    }

    public $sortable = ['manufacturer'];
}
