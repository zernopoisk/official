<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class PaymentForm extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'payment_forms';

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'alias', 'name', 'translit'
    ];
}
