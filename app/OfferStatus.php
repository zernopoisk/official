<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class OfferStatus extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'offers_statuses';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alias', 'name', 'translit', 'sense',
        'available'
    ];
}
