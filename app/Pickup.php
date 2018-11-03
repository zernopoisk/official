<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Pickup extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'pickup';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alias', 'name', 'translit',
        'available'
    ];
}
