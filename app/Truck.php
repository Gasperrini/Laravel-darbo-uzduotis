<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Kyslik\ColumnSortable\Sortable;

class Truck extends Model
{
    use Sortable;

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

    public function manufacturer(){
        return $this->belongsTo(Manufacturer::class, 'make_id');
    }

    public $sortable = ['make_id', 'year', 'owner', 'owner_number'];
}
